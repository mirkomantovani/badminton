<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/img/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/css/material-design-iconic-font.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/css/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/login/css/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/css/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/login/css/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/img/login-wallpaper.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pwd" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                   
					</div>
                    <?
                     if(isset($_GET['invalidLogin'])){
        echo '<p style="color:red; text-align:center;">Wrong email or password</p><br>';         
                        } ?>

				<!--	<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
                        <input type="hidden" name="login">
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="signin.php">
							Not registered? Sign in!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
 
<?php
    require ('connect.php');
    session_start();
   
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pwd = md5($_POST['pwd']);
        $risul = mysqli_query($connection, 'select * from users where email="' . $email . '" and psw ="' . $pwd . '"');
        if (mysqli_num_rows($risul) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['row'] = $risul->fetch_assoc();
            
            header('Location: http://badmintonclubs.altervista.org/index.php');
        } else {
            unset($_POST);
            header("Location: ".$_SERVER['PHP_SELF']."?invalidLogin");
        }
              } 
    
    ?>
    
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="http://badmintonclubs.altervista.org/login/js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="http://badmintonclubs.altervista.org/login/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="http://badmintonclubs.altervista.org/login/js/popper.js"></script>
	<script src="http://badmintonclubs.altervista.org/login/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="http://badmintonclubs.altervista.org/login/js/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="http://badmintonclubs.altervista.org/login/js/moment.min.js"></script>
	<script src="http://badmintonclubs.altervista.org/login/js/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="http://badmintonclubs.altervista.org/login/js/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="http://badmintonclubs.altervista.org/login/js/main.js"></script>

</body>
</html>