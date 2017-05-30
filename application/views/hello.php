<html>
<head>
	<title>Hello</title>
</head>
<body>

<p>HelloHelloHello</p>
<?php

	$sc = $id;
    //print_r($sc);
	$data['hello'] = 'world';
?>




<button type="submit" class="btn btn-success" onclick="window.location='<?php echo site_url("Questions/quizdisplay");?>'">Play</button>
<?php 
print_r ($data);
?>


</body>
</html>