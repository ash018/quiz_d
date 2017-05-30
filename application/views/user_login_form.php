<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

header("location: http://localhost/login/index.php/user_authentication/user_login_process");
}
?>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>




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




</head>
<body>




 <div class="formStart">
	

      <img src="<?php echo base_url() ?>assets/img/Info-Quize.png" width="100" height="50" align="middle" class="center">
      
     
		<?php echo form_open('registration_controller/user_login_process'); ?>
			<table>
				<tr>
					<td style="color:#fff">User Name</td>

					<td style="color:#fff"><?php echo form_input(array('id'=>'name','name' => 'username','placeholder' => 'username','size'=>80,'required'=>'required','autocomplete'=>'off'));?> </td>
				</tr>
				<tr>
					<td>.</td>
				</tr>
				<tr>
					<td style="color:#fff">Password</td>

					<td style="color:#fff"><?php echo form_input(array('id'=>'password','name' => 'password','placeholder' => '**********','size'=>80,'required'=>'required','autocomplete'=>'off'));?> </td>
				</tr>
				
				<tr>
					<td>.</td>
				</tr>
				
				<tr>
					<td style="color:#fff"><input type="submit" value="Login" name="submit"/><br /></td>
				</tr>
				
				
				
			</table>
			

			
		 <?php echo form_close(); ?>
			
			<img src="<?php echo base_url() ?>assets/img/paricel.png" align="" style="height:80px;" class="left-img" >
			<img src="<?php echo base_url() ?>assets/img/xeldrin.png" align="right" style="left:1000px; height:80px;" class = "right-img">
			

        
      
      
</div> 



</body>
</html>