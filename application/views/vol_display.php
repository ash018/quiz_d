<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />   
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css"/>
	<!--link rel="stylesheet" href="assets/css/normalize.css"-->   
    <!--link rel="stylesheet" href="assets/css/style.css"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--link rel="stylesheet" href="/resources/demos/style.css"-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
</head>
<body>



	<div class="form">
      
	  <img src="<?php echo base_url() ?>assets/img/Info-Quize.png" width="100" height="50" align="middle" class="center">
	  
	 <div id="container">
         <?php
         $vol = $name;
          var_dump($vol);?>
	 <form method="post" action="<?php echo base_url();?>d_QuizExam/d_ques">
       
    
			 <button type="submit" class="button button-block"onclick="window.location='<?php echo site_url("d_QuizExam/index");?>'">April-June 2017   Volume 14 Issue 2
</button>
		  <br>

    
    
	
	
	
    
		
		</form>
	
	 <img src="<?php echo base_url() ?>assets/img/paricel.png" align="" style="height:80px;" class="left-img">
     <img src="<?php echo base_url() ?>assets/img/xeldrin.png" align="right" style="left:1000px; height:80px;" class = "right-img">
	
	</div>
	  
	  
	 </div>



</body>
</html>