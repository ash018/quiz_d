<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign-Up/Login Form</title>
        <link href='<?php echo base_url();?>assets/sign-up-login-form/css/css.css' rel='stylesheet' type='text/css'>    
        <link rel="stylesheet" href="<?php echo base_url();?>assets/sign-up-login-form/css/normalize.css">    
        <link rel="stylesheet" href="<?php echo base_url();?>assets/sign-up-login-form/css/style.css">    
    </head>
    <body>
        <div class="form">      
            <ul class="tab-group">
                <li class="tab"><a href="#signup">Quiz</a></li>
                <li class="tab active"><a href="#login">Log In</a></li>
            </ul>

            <div class="tab-content">
                <div id="signup">   
                    <h1>Log In for Quiz</h1>	      
                    <form method="post" action="<?php echo base_url('login');?>">
                        <div class="field-wrap">
                            <label>
                                Staff ID<span class="req">*</span>
                            </label>
                            <input type="text" name="EmpCode" required />
                        </div>
                        <div class="field-wrap">
                            <label>
                                Password<span class="req">*</span>
                            </label>
                            <input type="password" name="Password" required />
                        </div>
                        <button type="submit" class="button button-block"/>Sign In</button>
                    </form>
                </div>	  
                <div id="login">   
                    <h1>Welcome Back!</h1>

                    <!--<form action="login.php" method="post">
                            <div class="field-wrap">
                                    <label>
                                            Contact. No.<span class="req">*</span>
                                    </label>
                                    <input type="text" required autocomplete="off"/>
                            </div>
                            <button class="button button-block"/>Log In</button>
                    </form>-->

                </div>

            </div><!-- tab-content -->

        </div> <!-- /form -->

        <script src='<?php echo base_url();?>assets/sign-up-login-form/js/jquery.min.js'></script>
        <script src="<?php echo base_url();?>assets/sign-up-login-form/js/index.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#ContactNo").keydown(function (e) {
                    if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                            (e.keyCode >= 35 && e.keyCode <= 40)) {
                        return;
                    }
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
                });
            });
        </script>
    </body>
</html>
