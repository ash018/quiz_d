<!DOCTYPE html>
<html>
<head>
    <title>:: DMS সফটওয়্যার Feedback ::</title>
    <meta xcharset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery_ui/jquery-ui.css">
    <script src="<?php echo base_url();?>assets/jquery_ui/jquery-1.9.1.js"></script>
    <script src="<?php echo base_url();?>assets/jquery_ui/jquery-ui.js"></script>
    <link href="<?php echo base_url();?>assets/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <!--<link type="text/css" rel="stylesheet" href="style/styled.css"></link>-->
    <script>
        $(document).ready(function(){
            for (var i=2;i<6;i++)
            {
                $('#q'+i).hide();
            }
            for (var i=0;i<6;i++)
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

            $("#radio1").click(function(){
                $("#button_q1").show();
            });
            $("#radio2").click(function(){
                $("#button_q1").show();
            });

            $("#radio3").click(function(){
                $("#button_q2").show();
            });
            $("#radio4").click(function(){
                $("#button_q2").show();
            });
            $("#radio5").click(function(){
                $("#button_q2").show();
            });
            $("#radio6").click(function(){
                $("#button_q2").show();
            });
            $("#radio7").click(function(){
                $("#button_q2").show();
            });

            $("#radio8").click(function(){
                $("#button_q3").show();
            });
            $("#radio9").click(function(){
                $("#button_q3").show();
            });

            $("#radio10").click(function(){
                $("#button_q4").show();
            });
            $("#radio11").click(function(){
                $("#button_q4").show();
            });
            $("#radio12").click(function(){
                $("#button_q4").show();
            });
            $("#radio13").click(function(){
                $("#button_q4").show();
            });
            $("#radio14").click(function(){
                $("#button_q4").show();
            });

            $("#radio15").click(function(){
                $("#button_q5").show();
            });
            $("#radio16").click(function(){
                $("#button_q5").show();
            });
            $("#radio17").click(function(){
                $("#button_q5").show();
            });
            $("#radio18").click(function(){
                $("#button_q5").show();
            });
            $("#radio19").click(function(){
                $("#button_q5").show();
            });

            $("#button_q1").click(function() {
                $("#flash").show();
                $("#flash").fadeIn(400).html('<img src="<?php echo base_url();?>/assets/img/ajax_loader_blue_512.gif" style="vertical-align:middle;"/>&nbsp;processing').addClass('submit_data_loading');

                var q1 = $("input#q1").val();
                var r1 = $('input[name=question1]:checked', '#contact_q1').val();
                var staffid = $("input#staffid").val();
                if(q1 == ""){
                    return false;
                }
                var dataString = 'question='+ q1 + '&result=' + r1;
                console.log(dataString);
                //return false;
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>quizexam/process",
                    data: dataString,
                    success: function(response) {
                        $('#q1').hide();

                        if(1 == 5){
                            window.alert(" Hey Exam is finished. Press OK to show Result.");
                            window.location = "results_new.php"
                        }else{
                            $('#q2').show();
                        }
                    }
                });
                return false;
            });

            $("#button_q2").click(function() {
                $("#flash").show();
                $("#flash").fadeIn(400).html('<img src="<?php echo base_url();?>/assets/img/ajax_loader_blue_512.gif" style="vertical-align:middle;"/>&nbsp;processing').addClass('submit_data_loading');

                var q2 = $("input#q2").val();
                var r2 = $('input[name=question2]:checked', '#contact_q2').val();
                var staffid = $("input#staffid").val();
                if(q2 == ""){
                    return false;
                }
                var dataString = 'question='+ q2 + '&result=' + r2;
                console.log(dataString);
                //return false;
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>quizexam/process",
                    data: dataString,
                    success: function(response) {
                        $('#q2').hide();

                        if(2 == 5){
                            window.alert(" Hey Exam is finished. Press OK to show Result.");
                            window.location = "results_new.php"
                        }else{
                            $('#q3').show();
                        }
                    }
                });
                return false;
            });

            $("#button_q3").click(function() {
                $("#flash").show();
                $("#flash").fadeIn(400).html('<img src="<?php echo base_url();?>/assets/img/ajax_loader_blue_512.gif" style="vertical-align:middle;"/>&nbsp;processing').addClass('submit_data_loading');

                var q3 = $("input#q3").val();
                var r3 = $('input[name=question3]:checked', '#contact_q3').val();
                var staffid = $("input#staffid").val();
                if(q3 == ""){
                    return false;
                }
                var dataString = 'question='+ q3 + '&result=' + r3;
                console.log(dataString);
                //return false;
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>quizexam/process",
                    data: dataString,
                    success: function(response) {
                        $('#q3').hide();

                        if(3 == 5){
                            window.alert(" Hey Exam is finished. Press OK to show Result.");
                            window.location = "results_new.php"
                        }else{
                            $('#q4').show();
                        }
                    }
                });
                return false;
            });

            $("#button_q4").click(function() {
                $("#flash").show();
                $("#flash").fadeIn(400).html('<img src="<?php echo base_url();?>/assets/img/ajax_loader_blue_512.gif" style="vertical-align:middle;"/>&nbsp;processing').addClass('submit_data_loading');

                var q4 = $("input#q4").val();
                var r4 = $('input[name=question4]:checked', '#contact_q4').val();
                var staffid = $("input#staffid").val();
                if(q4 == ""){
                    return false;
                }
                var dataString = 'question='+ q4 + '&result=' + r4;
                console.log(dataString);
                //return false;
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>quizexam/process",
                    data: dataString,
                    success: function(response) {
                        $('#q4').hide();

                        if(4 == 5){
                            window.alert(" Hey Exam is finished. Press OK to show Result.");
                            window.location = "results_new.php"
                        }else{
                            $('#q5').show();
                        }
                    }
                });
                return false;
            });
            $("#button_q5").click(function() {
                $("#flash").show();
                $("#flash").fadeIn(400).html('<img src="<?php echo base_url();?>/assets/img/ajax_loader_blue_512.gif" style="vertical-align:middle;"/>&nbsp;processing').addClass('submit_data_loading');

                var q5 = $("input#q5").val();
                var r5 = $('input[name=question5]:checked', '#contact_q5').val();
                var staffid = $("input#staffid").val();
                if(q5 == ""){
                    return false;
                }
                var dataString = 'question='+ q5 + '&result=' + r5;
                console.log(dataString);
                //return false;
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>quizexam/process",
                    data: dataString,
                    success: function(response) {
                        $('#q5').hide();

                        if(5 == 5){
                            window.alert(" Hey Exam is finished. Press OK to show Result.");
                            window.location = "<?php echo base_url();?>quizexam/chart"
                        }else{
                            $('#q6').show();
                        }
                    }
                });
                return false;
            });
        });
    </script>
    <style>
        .ui-button {
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container">
    <div style="text-align: center;">
        <h2><span style="border: 1px #CCC solid;">ACI MOTORS</span></h2>
        <p class="lead"><h4 style="color:#06C;">DMS সফটওয়্যার Feedback</h4></p>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
            <div id="q1">
                <form id="contact_q1" name="contact_q1" method="post" action="" role="form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            1. DMS সফটওয়্যার টি কি আপনার জন্য উপকারি ?
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="radio_a1" class="form-group">
                                <input class="form-control" type="radio" id="radio1" value="a" name="question1"  required="required" />
                                <label for="radio1" class="control-label col-xm-6 col-sm-6">১। হ্যাঁ</label>
                                <input class="form-control" type="radio" id="radio2" value="b" name="question1"  required="required" />
                                <label for="radio2" class="control-label col-xm-6 col-sm-6">২। না </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="flash"></div>
                            <input type="hidden" id="q1" name="q1" value="q1" required />
                            <input type="submit" name="submit" id="button_q1" class="btn btn-success btn-lg btn-lg-custome" value="Next" />
                        </div>
                    </div>
                </form>
            </div>

            <div id="q2">
                <form id="contact_q2" name="contact_q2" method="post" action="" role="form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            2. DMS সফটওয়্যার দেখে আপনার কেমন লাগছে?
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="radio_a2" class="form-group">
                                <input class="form-control" type="radio" id="radio3" value="a" name="question2"  required="required" />
                                <label for="radio3" class="control-label col-xm-6 col-sm-6">১। খুবই ভাল</label>
                                <input class="form-control" type="radio" id="radio4" value="b" name="question2"  required="required" />
                                <label for="radio4" class="control-label col-xm-6 col-sm-6">২। ভাল</label>
                                <input class="form-control" type="radio" id="radio5" value="c" name="question2"  required="required" />
                                <label for="radio5" class="control-label col-xm-6 col-sm-6">৩। মোটামুটি</label>
                                <input class="form-control" type="radio" id="radio6" value="d" name="question2"  required="required" />
                                <label for="radio6" class="control-label col-xm-6 col-sm-6">৪। খারাপ</label>
                                <input class="form-control" type="radio" id="radio7" value="e" name="question2"  required="required" />
                                <label for="radio7" class="control-label col-xm-6 col-sm-6">৫। খুবই খারাপ</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="flash"></div>

                            <input type="hidden" id="q2" name="q2" value="q2" required />
                            <input type="submit" name="submit" id="button_q2" class="btn btn-success btn-lg btn-lg-custome" value="Next" />
                        </div>
                    </div>
                </form>
            </div>

            <div id="q3">
                <form id="contact_q3" name="contact_q3" method="post" action="" role="form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            3. ট্যাব টি কি আপনার জন্য উপকারি ?
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="radio_a3" class="form-group">
                                <input class="form-control" type="radio" id="radio8" value="a" name="question3"  required="required" />
                                <label for="radio8" class="control-label col-xm-6 col-sm-6">১। হ্যাঁ</label>
                                <input class="form-control" type="radio" id="radio9" value="b" name="question3"  required="required" />
                                <label for="radio9" class="control-label col-xm-6 col-sm-6">২। না</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="flash"></div>
                            <input type="hidden" id="q3" name="q3" value="q3" required />
                            <input type="submit" name="submit" id="button_q3" class="btn btn-success btn-lg btn-lg-custome" value="Next" />
                        </div>
                    </div>
                </form>
            </div>

            <div id="q4">
                <form id="contact_q4" name="contact_q4" method="post" action="" role="form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8">4.DMS সফটওয়্যার আপনার কত ভাগ কাজ সহজ করবে বলে আপনি মনে করেন? </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="radio_a4" class="form-group">
                                <input class="form-control" type="radio" id="radio10" value="a" name="question4"  required="required" />
                                <label for="radio10" class="control-label col-xm-6 col-sm-6">১। ০-২০%</label>
                                <input class="form-control" type="radio" id="radio11" value="b" name="question4"  required="required" />
                                <label for="radio11" class="control-label col-xm-6 col-sm-6">২। ২০-৪০%</label>
                                <input class="form-control" type="radio" id="radio12" value="c" name="question4"  required="required" />
                                <label for="radio12" class="control-label col-xm-6 col-sm-6">৩। ৪০-৬০%</label>
                                <input class="form-control" type="radio" id="radio13" value="d" name="question4"  required="required" />
                                <label for="radio13" class="control-label col-xm-6 col-sm-6">৪। ৬০-৮০%</label>
                                <input class="form-control" type="radio" id="radio14" value="e" name="question4"  required="required" />
                                <label for="radio14" class="control-label col-xm-6 col-sm-6">৫। ৮০-১০০%</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="flash"></div>
                            <input type="hidden" id="q4" name="q4" value="q4" required />
                            <input type="submit" name="submit" id="button_q4" class="btn btn-success btn-lg btn-lg-custome" value="Next" />
                        </div>
                    </div>
                </form>
            </div>

            <div id="q5">
                <form id="contact_q5" name="contact_q5" method="post" action="" role="form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            5. আজকের অনুষ্ঠানের আয়োজন আপনার কেমন লাগছে ?
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="radio_a5" class="form-group">
                                <input class="form-control" type="radio" id="radio15" value="a" name="question5"  required="required" />
                                <label for="radio15" class="control-label col-xm-6 col-sm-6">১। খুবই ভাল</label>
                                <input class="form-control" type="radio" id="radio16" value="b" name="question5"  required="required" />
                                <label for="radio16" class="control-label col-xm-6 col-sm-6">২। ভাল</label>
                                <input class="form-control" type="radio" id="radio17" value="c" name="question5"  required="required" />
                                <label for="radio17" class="control-label col-xm-6 col-sm-6"> ৩। মোটামুটি</label>
                                <input class="form-control" type="radio" id="radio18" value="d" name="question5"  required="required" />
                                <label for="radio18" class="control-label col-xm-6 col-sm-6">৪। খারাপ</label>
                                <input class="form-control" type="radio" id="radio19" value="e" name="question5"  required="required" />
                                <label for="radio19" class="control-label col-xm-6 col-sm-6">৫। খুবই খারাপ</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="flash"></div>
                            <input type="hidden" id="q5" name="q5" value="q5" required />
                            <input type="submit" name="submit" id="button_q5" class="btn btn-success btn-lg btn-lg-custome" value="Next" />
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>
