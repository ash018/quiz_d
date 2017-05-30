<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/jquery_ui/jquery-ui.css">
    <script src="<?php echo base_url() ?>assets/jquery_ui/jquery-1.9.1.js"></script>
    <script src="<?php echo base_url() ?>assets/jquery_ui/jquery-ui.js"></script>
    <link href="<?php echo base_url() ?>assets/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/styled.css"></link>
</head>
<body>
<div class="container">
    <div class="vpb_body_centered">
        <div style="height:120px;margin-top:0px;" class="vpb_middle_menu_wrapper" id="vpb_middle_menu_wrap">
            <div align="center" style="height:120px;">
                <div align="right" class="admin_hover" style="float:right;padding-bottom:10px; padding-top:10px;">&nbsp;</div><br clear="all">
                <h1 style=" font-size:25px;">Online Examination System</h1>
            </div>
            <div class="clear"></div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <?php

                //var_dump($userDetail[0]->DrName);
                echo "<p><span style='font-size:22px; font-weight:bold;color: #000;'>".'Dr. Name : '."</span>";
                //echo "<span style='font-size:22px; font-weight:bold;color:green;'>".$DrName."</span></p>";
                echo "<span style='font-size:22px; font-weight:bold;color:green;'>".$userDetail->user_name."</span></p>";
                echo "<p><span style='font-size:22px; font-weight:bold;color: #000;'>".'Contact No. : '."</span>";
                echo "<span style='font-size:22px; font-weight:bold;color: #000;'>".$userDetail->contact."</span></p>";
                //echo "<span style='font-size:22px; font-weight:bold;color:green;'>".$s_staffid."</span></p>";
                //$diff = strtotime($exam_time_start) - strtotime($cur_date);
                echo '<br/>';
                ?>
            </div>
        </div>
        <?php

        //echo "<span style='font-size:22px; font-weight:bold;color:green;'>".$quesDetail->details."</span></p>";

        //if($diff <= 0 && $diff >= -3000){
        //include('start_exam_small.php');
        echo $start_exam_small;
        ?>
    </div>
</div>
</body>
</html>
