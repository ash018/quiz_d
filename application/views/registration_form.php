<!DOCTYPE html>
<html lang="en">
<head>
	<head>
    <meta charset="UTF-8">
    <title>Med Quiz Registration</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />   
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-select.css">
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

	
	
	
	
	
	<script>
  $(document).ready(function(){
    $("#datepicker").datepicker();
	
	$("#DesId").css("align","left");
  });
  
  </script>
	
	<script>
		$("input").attr("required", true);

	</script>
	
	
	
<script src="<?php echo base_url() ?>assets/css/bootstrap-select.js"></script>	
	
	
</head>
<body>




<div class="form">
      <img src="<?php echo base_url() ?>assets/img/Info-Quize.png" width="100" height="50" align="middle" class="center">

<div id="container">
	<h1 style="color:#fff">Your Registration is Here</h1>

 
	 
	
			
	
 
 




<br>
<br>


<form action= "<?php echo site_url('registration_controller/user_form'); ?>" method ="post">

		
<table align = "center">
	<tr>
		<td style="color:#fff">Your Name</td>
		
		<td style="color:#fff"><?php echo form_input(array('id'=>'user_name','name' => 'user_name','placeholder' => 'Name','size'=>80,'required'=>'required'));?> </td>
	</tr>
	
	<tr>
		<td>.</td>
	</tr>
	
	<tr>
				<td style = "color:#fff; right:800px;">Sex:  </td>
				</tr>
				<tr>
				<td ><input class="gender" type="radio" name="sex" value="male" style="color:#fff;"></td>  <td> <h4 style="color:#fff;">Male</h4> </td> <br>
				</tr>
				<tr>
				<td><input class="gender" type="radio" name="sex" value="female" style="color:#fff;"></td>  <td> <h4 style="color:#fff;">Female</h4> </td><br>
				</tr>
	
	
	<tr>
		<td>.</td>
	</tr>
	
	<tr>
		<td style="color:#fff">Email </td>
		<td style="color:#fff"><?php echo form_input(array('id'=>'user_email','name' => 'user_email','placeholder' => 'Email','size'=>25,'required'=>'required'));?> </td>
	</tr>
	
	<tr>
		<td>.</td>
	</tr>
	
	
	<tr>
		<td style="color:#fff">Your Password </td>
		<td style="color:#fff"><?php echo form_input(array('id'=>'user_password','name' => 'user_password','placeholder' => '***********','size'=>25,'required'=>'required'));?> </td>
	</tr>
	
	
	<tr>
		<td>.</td>
	</tr>
	
	
	<tr>
				
			<td style = "color:#fff; font-style:italic;" >Date of Birth:</td>
				
			
			<td><input name="DateOfBirth"   id="datepicker" style="color:#fff" required/> </td>
	</tr>
		  
	<tr>
		<td>.</td>
	</tr>
	
	
	<tr>
		<td style="color:#fff">Address </td>
		<td style="color:#fff"><?php echo form_input(array('id'=>'Address','name' => 'Address','placeholder' => 'Address','size'=>25,'required'=>'required'));?> </td>
	</tr>
	
	
	<tr>
		<td>.</td>
	</tr>
	
	
	<tr>
		<td style="color:#fff">Designation: </td>
		
		<td>
			
		<form>
		<select required name="designation" id="designation" class="selectpicker show-tick form-control" >
				
				
					<option value="">Please select</option>
					<option value="PROFESSOR">PROFESSOR</option>
					<option value="ASSOCIATE PROFESSOR">ASSOCIATE PROFESSOR</option>
					<option value="ASSISTANT PROFESSOR">ASSISTANT PROFESSOR</option>
					<option value="RESIDENTIAL PHYSICIAN">RESIDENTIAL PHYSICIAN</option>
					<option value="RESIDENT SURGEON">RESIDENT SURGEON</option>
					<option value="REGISTAR">REGISTAR</option>
					<option value="ASSISTANT REGISTAR">ASSISTANT REGISTAR</option>
					<option value="MEDICAL OFFICER">MEDICAL OFFICER</option>
					<option value="GENERAL PRACTITIONER">GENERAL PRACTITIONER</option>
				<br><br>
				
				</select>
			</form>
		
		
		</td>
	</tr>
	
	<tr>
		<td>.</td>
	</tr>
	<tr>
		<td style="color:#fff">Contact No.

		</td>
		<td style="color:#fff"><?php echo form_input(array('id'=>'contact','name' => 'contact','placeholder' => 'contact','size'=>25,'required'=>'required'));?> </td>
	</tr>
	
	<tr>
		<td>.</td>
	</tr>
	
	
	 <tr>
				
				<td id="desId" style="color:#fff;text-align:left; left:0px;"  >District : </td>
				<td>
					<select name="district" id="district" class="selectpicker show-tick form-control" required>
					<option value="">Please select</option>
					<?php  foreach($districts as $row) { ?> 
					
					
						<option value="<?php print $row->districtName;?>"><?php echo ($row->districtName); ?></option>
						
					
					<br><br>
					<?php }  ?>
					</select>
				</td>
				
			
	</tr>
	
	<tr>
		<td>.</td>
	</tr>
	
	
	<tr>
		<td></td>
		<td><button type="submit" id="user-submit"class="button button-block" >Let's Play</button></td>
	</tr>
	
</table>

		  <img src="<?php echo base_url() ?>assets/img/paricel.png"  align="" style="height:80px;" class="left-img">
		  <img src="<?php echo base_url() ?>assets/img/xeldrin.png"  align="right" style="left:1000px; height:80px;" class = "right-img">

</form>



</div>

		
</div>
</body>
</html>