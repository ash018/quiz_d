<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Med Quiz!!</title>
	
	
	 <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />   
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
	
 
  <script>
  $(document).ready(function(){
    $("#datepicker").datepicker();
	
	$("#DesId").css("align","left");
  });
  
  </script>
	
	
	
	

</head>
<body>



 <div class="formStart">
	<button id="admin" type="button" class="btn btn-primary" onclick="window.location='<?php echo site_url("registration_controller/Admin_Login");?>'">Admin Login</button>
		<button id="user" type="button" class="btn btn-primary pull-right"  onclick="window.location='<?php echo site_url("registration_controller/User_Login");?>'">User Login</button>
      <img src="<?php echo base_url() ?>assets/img/Info-Quize.png" width="100" height="50" align="middle" class="center">
      
      
      <div class="tab-content">
        <div id="signup">   
         
          
       <!--   <form action="/" method="post"> -->
          
			
			<button type="button" class="button button-block" onclick="window.location='<?php echo site_url("registration_controller/medquizRegistration");?>'">Registration For Quiz</button>
			<br>
			<br>
			<br>
			<img src="<?php echo base_url() ?>assets/img/paricel.png" align="" style="height:80px;" class="left-img">
			<img src="<?php echo base_url() ?>assets/img/xeldrin.png" align="right" style="left:1000px; height:80px;" class = "right-img">

          
       <!--   </form> -->

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
		  
		  
          </form>
		
        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

</body>
</html>