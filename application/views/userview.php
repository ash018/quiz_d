<html>
<head>
	<title>User View</title>
	
	<meta charset="utf-8">
	
	
	
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
<div class="container">
	<p>HelloHelloHello</p>
	<?php

		$sc = $id;
		//var_dump($data);
		print_r($sc);
		$data['hello'] = 'world';
	?>


	<h1>Hello User</h1>


	<?php 
	//print_r ($data);
	?>



	<button type="button" class="button button-block" onclick="window.location='<?php echo site_url("registration_controller/volumeDisplay");?>'">Play Game</button>
</div>

</body>
</html>