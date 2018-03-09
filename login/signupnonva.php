<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/volano.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/login-wallpaper.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter name">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter surname">
						<input class="input100" type="text" name="surname" placeholder="Surname">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter birthday">
						<input class="input100" type="date" name="birthday" placeholder="Birthday">
						<span class="focus-input100" data-placeholder="&#xf331;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>
<?
                     if(isset($_GET['invalidLogin'])){
        echo '<p style="color:red; text-align:center;">Wrong email or password</p><br>';         
                        } ?>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pwd" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Signup
						</button>
                        <input type="hidden" name="signup">
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="login.php">
							Already registered? Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
 
<?php 
    session_start();
require ('connect.php');
    
   if (isset($_POST['signup'])) {
       header('Location: http://www.google.com');
        if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['birthday']) && isset($_POST['email']) && isset($_POST['pwd'])) {
            $nome = $_POST["name"];
            $cognome = $_POST['surname'];
            $nascita = $_POST['birthday'];
            $email = $_POST['email'];
            $pwd = md5($_POST['pwd']);
            if($nome == "" || $cognome == "" || $nascita == "" && $email == "" || $pwd === ""){
                unset($_POST);
               // header("Location: ".$_SERVER['PHP_SELF']."?dataNull");
            }else{
            	$query = "INSERT INTO users (email, name,surname,birth,psw) VALUES ('$email', '$nome', '$cognome', '$nascita','$pwd')";
                $result = mysqli_query($connection, $query);
                
                //header('Location: http://badmintonclubs.altervista.org/login.php');
                header('Location: login.php');
                //echo '<script>window.location.href="/badminton/webapp/index.php"</script>';
            }
            //header("Location: ../webapp/index.php");
               ///echo '<script>window.location.href="/badminton/login/login.php"</script>'; 
        }
    }
    
    ?>
    
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="js/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
