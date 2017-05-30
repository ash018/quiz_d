<?php
    $rowcount=  count($question);
?>
<script type="text/javascript">
    var rowcount = <?php echo $rowcount; ?>;
    $(document).ready(function () {
        for (var i = 2; i <= rowcount; i++)
        {
            $('#q' + i).hide();
        }
        for (var i = 0; i <= rowcount; i++)
        {
            $('#button_q' + i).hide();
        }

    });

    $(function () {
        for (var i = 0; i <= rowcount; i++)
        {
            $("#radio_a" + i).buttonset();
        }
        //$( "#radio_a1" ).buttonset();
        <?php
        foreach ($question_option as $rows) {
        ?>
        $("#radio<?php echo $rows['id']; ?>").click(function () {
            $("#button_q<?php echo $rows['question_id']; ?>").show();
        });
        <?php
        }
        for ($i = 1; $i < 10; $i++) {
        ?>
            $("#button_q<?php echo $i; ?>").click(function () {
                $("#flash").show();
                $("#flash").fadeIn(400).html('<img src="<?php echo base_url();?>assets/images/ajax_loader_blue_512.gif" style="vertical-align:middle;"/>&nbsp;processing').addClass('submit_data_loading');

                var q<?php echo $i; ?> = $("input#q<?php echo $i; ?>").val();
                var r<?php echo $i; ?> = $('input[name=question<?php echo $i; ?>]:checked', '#contact_q<?php echo $i; ?>').val();
                var empcode = $("input#empcode").val();
                if (q<?php echo $i; ?> == "") {
                    return false;
                }
                var dataString = 'question=' + q<?php echo $i; ?> + '&empcode=' + empcode + '&result=' + r<?php echo $i; ?>;
                console.log(dataString);
                //return false;	
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>home/process",
                    data: dataString,
                    success: function (response) {
                        $('#q<?php echo $i; ?>').hide();

                        if (<?php echo $i; ?> == 9) {
                            window.alert(" Hey Exam is finished. Press OK to show Result.");
                            window.location = "results_new.php"
                        } else {
                            $('#q<?php echo $i + 1; ?>').show();
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
<style>
    .ui-button {
        text-align: left;
    }
</style>
<?php
    date_default_timezone_set("Asia/Dacca");
    $cur_date = date("Y-m-d H:i:s");
?>
<div class="container">
    <div style="text-align: center;">
        <h2><span style="border: 1px #CCC solid;">ACI ANIMAL HEALTH</span></h2>
        <p class="lead"><h4 style="color:#06C;">QUIZ for Biologics</h4></p>
        <p><h4><?php echo $Name;?></h4></p>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
        <?php foreach ($question_details as $rows): ?>
        <div id="<?php echo $rows['question'];?>">
            <form id="contact_<?php echo $rows['question'];?>" name="contact_<?php echo $rows['question'];?>" method="post" action="" role="form">
                <div class="row">  	
                    <div class="col-xs-12 col-sm-12 col-md-8">
                            <?php echo $rows['details'];?>
                    </div>
                </div>						
                <div class="row">  	
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <div id="radio_a<?php echo $rows['id']?>" class="form-group">
                                        <?php foreach ($rows['details_option'] as $row_op): ?>
                                        <input class="form-control" type="radio" id="radio<?php echo $row_op['id']?>" value="<?php echo $row_op['value']?>" name="question<?php echo $rows['id']?>"  required="required" />
                                        <label for="radio<?php echo $row_op['id']?>" class="control-label col-xm-6 col-sm-6"><?php echo $row_op['option']?></label>
                                        <?php endforeach;?>
                                </div>  
                        </div>
                </div>
                <div class="row"> 
                        <div class="col-xs-12 col-sm-12 col-md-12">	
                                <div id="flash"></div>
                                <input type="hidden" id="empcode" name="EmpCode" value="<?php echo $EmpCode;?>" required />
                                <input type="hidden" id="<?php echo $rows['question'];?>" name="<?php echo $rows['question'];?>" value="<?php echo $rows['question'];?>" required />	
                                <input type="submit" name="submit" id="button_<?php echo $rows['question'];?>" class="btn btn-success btn-lg btn-lg-custome" value="Next" />
                        </div>                
                </div>					  
            </form>
        </div>
        <?php endforeach;?>
        </div>
    </div>	
</div>
<?php //foreach ($question_details as $fs): ?>
    <?php //echo $fs['id'];?>
    <?php //foreach ($fs['details_option'] as $img): ?>
        <?php
            //echo $img['id'];
        ?>
    <?php //endforeach; ?>
<?php //endforeach;?>
