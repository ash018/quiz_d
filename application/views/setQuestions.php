<html>
<head>
	<title>Setting Question</title>
	
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
    
    <style>
        .op{
            color:white;
        }
    </style>

    <h1>Set Your Questions Here</h1>

    <div class="form">
        
       <form action= "<?php echo site_url('registration_controller/question_form'); ?>" method ="post">
			<table>
				<tr>

                                        <form action="registration_controller/question_form" method="POST">
                                        <select name="id" id="pos_select" class="form_input">
                                        <option value="1">Question 1 </option>
                                        <option value="2">Question 2</option>
                                        <option value="3">Question 3</option>
                                        <option value="4">Question 4 </option>
                                        <option value="5">Question 5 </option>
                                        <option value="6">Question 6 </option>
                                        </select>
                                        
                                        </form>
                                        
                                            <tr>
                                                <td>  <br></td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="color:#fff"><?php echo form_input(array('id'=>'details','name' => 'details','placeholder' => 'question','size'=>80,'autocomplete'=>'off','required'=>'required'));?> 
                                                </td>                                           
                                            </tr>
                                            
                                            <tr>
                                                <td> <br> </td>
                                            </tr>
                                           


                                            <tr>
                                                <td class="op">Option 1</td>
                                            
                                            </tr>
                                            
                                            <tr>
                                                <td>  <br></td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="color:#fff"><?php echo form_input(array('id'=>'option1','name' => 'option1','placeholder' => 'Option1','size'=>80,'autocomplete'=>'off','required'=>'required'));?> 
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>  <br></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td class="op">Option 2</td>
                                            
                                            </tr>
                                            
                                            <tr>
                                                <td>  <br></td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="color:#fff"><?php echo form_input(array('id'=>'option2','name' => 'option2','placeholder' => 'Option2','size'=>80,'autocomplete'=>'off','required'=>'required'));?> 
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>  <br></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td class="op">Option 3</td>
                                            
                                            </tr>
                                            
                                            <tr>
                                                <td><br></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td style="color:#fff"><?php echo form_input(array('id'=>'option3','name' => 'option3','placeholder' => 'Option3','size'=>80,'autocomplete'=>'off','required'=>'required'));?> 
                                                </td>
                                            </tr>
                                            
                                            
                                           
                                            
                                            <tr>
                                                <td><br></td>
                                            </tr>
                                            <tr>
                                            <td style="color:#fff"><input type="submit" class="button button-block" data-toggle="modal" data-target="#myModal"  name="submit"/><br /></td>
                                            </tr>

                                           

                                           
				
				
				
            </table>
        </form>
    
    </div>
    
    
    




</body>
</html>