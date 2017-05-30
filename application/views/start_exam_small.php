<script>
    $(document).ready(function(){
        for (var i=1;i<11;i++)
        {
            $('#q'+i).hide();
        }
        for (var i=2;i<11;i++)
        {
            $('#button_q'+i).hide();
        }

    });

    $(function() {
        for (var i=0;i<6;i++)
        {
            $( "#radio_a"+i ).buttonset();
        }
        //$( "#radio_a1" ).buttonset();
        <?php
        for ($i=1;$i<6;$i++)
        {
        if($i == 1){$j_a = 1;$j_b = 3;}
        if($i == 2){$j_a = 4;$j_b = 6;}
        if($i == 3){$j_a = 7;$j_b = 9;}
        if($i == 4){$j_a = 10;$j_b = 12;}
        if($i == 5){$j_a = 13;$j_b = 15;}
        ?>
        <?php for ($j=$j_a;$j<=$j_b;$j++){ ?>
        $("#radio<?php echo $j;?>").click(function(){
            $("#button_q<?php echo $i;?>").show();
        });
        <?php }?>
        <?php
        }
        ?>
        <?php
        for ($i=1;$i<6;$i++)
        {
        ?>
        $("#button_q<?php echo $i;?>").click(function() {
            $("#flash").show();
            $("#flash").fadeIn(400).html('<img src="<?php echo base_url() ?>assets/img/ajax_loader_blue_512.gif" style="vertical-align:middle;"/>&nbsp;processing').addClass('submit_data_loading');

            var q<?php echo $i;?> = $("input#q<?php echo $i;?>").val();
            var r<?php echo $i;?> = $('input[name=question<?php echo $i;?>]:checked', '#contact_q<?php echo $i;?>').val();
            var staffid = $("input#staffid").val();
            if(q<?php echo $i;?> == ""){
                return false;
            }
            var dataString = 'question='+ q<?php echo $i;?> + '&staffid=' + staffid + '&result=' + r<?php echo $i;?>;
            console.log(dataString);
            //return false;
            $.ajax({
                type: "POST",
                //url: "<?php echo base_uel();?>d_QuizExam/process",
				
				url: "process1.php",
                data: dataString,
                success: function(response) {
                    $('#q<?php echo $i;?>').hide();

                    if(<?php echo $i;?> == 5){
                        window.alert(" Hey Exam is finished. Press OK to show Result.");
                        window.location = "results_new.php"
                    }else{
                        $('#q<?php echo $i+1;?>').show();
                    }
                }
            });
            return false;
        });
        <?php
        }
        ?>
    });
</script>
<script language="javascript">
    var mins
    var secs;

    function cd() {
        mins = 1 * m("<?php echo $minute;?>"); // change minutes here
        secs = 0 + s(":<?php echo $second;?>");
        redo();
    }

    function m(obj) {
        for(var i = 0; i < obj.length; i++) {
            if(obj.substring(i, i + 1) == ":")
                break;
        }
        return(obj.substring(0, i));
    }

    function s(obj) {
        for(var i = 0; i < obj.length; i++) {
            if(obj.substring(i, i + 1) == ":")
                break;
        }
        return(obj.substring(i + 1, obj.length));
    }

    function dis(mins,secs) {
        var disp;
        if(mins <= 9) {
            disp = " 0";
        } else {
            disp = " ";
        }
        disp += mins + " .";
        if(secs <= 9) {
            disp += "0" + secs;
        } else {
            disp += secs;
        }
        return(disp);
    }

    function redo() {
        secs--;
        if(secs == -1) {
            secs = 59;
            mins--;
        }
        document.cd.disp.value = dis(mins,secs); // setup additional displays here.
        if((mins == 0) && (secs == 0)) {
            window.alert(" Hey Time is up. Press OK to continue.");
            window.location = "results_new.php" // redirects to specified page once timer ends and ok button is pressed
        } else {
            cd = setTimeout("redo()",1000);
        }
    }

    function init() {
        cd();
    }
    window.onload = init;
</script>
<style>
    .ui-button {
        text-align: left;
    }
</style>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8">
                <form role="form" name="cd">
                    <div class="form-group">
                        <span style="font-size:16px; color:#00F;">EXAMINATION   Time</span>:
                        <input name="disp" type="text" class="clock" id="txt" value="10:00" size="10" readonly="true" align="right" border="1" style="color:#F00; font-weight:bold; font-size:15px;" />
                        <span style="font-size:13px; color:#00F;">Minutes</span>
                    </div>
                </form>
            </div>
        </div>
        <?php
        foreach ($quesDetail as $row){
            //echo $row['id'];
        ?>
            <div id="q<?php echo $row['id']?>">
                <form id="contact_q<?php echo $row['id']?>" name="contact_q<?php echo $row['id']?>" method="post" action="" role="form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            <?php echo $row['details']?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="radio_a<?php echo $row['id']?>" class="form-group">
                                <?php
                                //print_r( $row['question_option']);

                                foreach($row['question_option'] as $row_op)
                                {
                                    ?>
                                    <input class="form-control" type="radio" id="radio<?php echo $row_op['id']?>" value="<?php echo $row_op['value']?>" name="question<?php echo $row['id']?>"  required="required" />
                                    <label for="radio<?php echo $row_op['id']?>" class="control-label col-xm-6 col-sm-6"><?php echo $row_op['option']?></label>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="flash"></div>
                            <input type="hidden" id="staffid" name="staffid" value="<?php //echo $s_staffid;?>" required />
                            <input type="hidden" id="q<?php echo $row['id']?>" name="q<?php echo $row['id']?>" value="q<?php echo $row['id']?>" required />
                            <input type="submit" name="submit" id="button_q<?php echo $row['id']?>" class="btn btn-success btn-lg btn-lg-custome" value="Next" />
                        </div>
                    </div>
                </form>
            </div>
            <?php
        }
        ?>
    </div>
</div>