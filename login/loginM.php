<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/volano.png"/>
<!--===============================================================================================-->
	
    
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="css/loginmobile.css" rel="stylesheet">
    
    
  <script src="//cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.1/mobile-detect.min.js"></script>
    <script>
        var md = new MobileDetect(window.navigator.userAgent);
        
        if(md.os() == null){
            window.location.replace("login.php");
        }  

    </script>
    
</head>
<body>
	
	<!--<div class="limiter">
		<div class="container-login100" style="background-image: url('img/login-wallpaper.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pwd" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                   
					</div>
                   

				<!--	<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

				<!--	<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
                        <input type="hidden" name="login">
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="signup.php">
							Not registered? Sign in!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>-->

<?php 
    session_start();
    require ('connect.php');
    /*
     $user= mysqli_query($connection, 'select * from users where name="Marco"');
    $row = $user->fetch_assoc();
             $email=$row['email'];
    echo $email;*/

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pwd = md5($_POST['pwd']);
        $qu = 'select * from users where email="' . $email . '" and psw ="' . $pwd . '"';
        //echo $qu;
        $risul = mysqli_query($connection, $qu);
        
       
        if (mysqli_num_rows($risul) == 1) { 
            
            $_SESSION['email'] = $email;
            $_SESSION['row'] = $risul->fetch_assoc();
            
            $ris = mysqli_query($connection, 'select * from userimages where user="'.$email.'"');
       
        if (mysqli_num_rows($ris) == 1) { 
            
            $_SESSION['userimages'] = $ris->fetch_assoc();
            
        }
                
            header('Location: ../webapp/');
            
        } else {
            unset($_POST);
            header("Location: ".$_SERVER['PHP_SELF']."?invalidLogin");
        }
              } 
    

    
    ?>
    
    
<!------ Include the above in your HEAD tag ---------->

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
               <!-- <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>--><div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                <input type="hidden" name="login">
                </div>
                 <?php
                     if(isset($_GET['invalidLogin'])){
        echo '<p style="color:red; text-align:center;">Wrong email or password</p><br>';         
                        } ?>
            </form><!-- /form -->
            <!--<a href="#" class="forgot-password">
                Forgot the password?
            </a>-->
        </div><!-- /card-container -->
    </div><!-- /container -->
	
 
    
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
    <script src="js/loginmobile.js"></script>

</body>
</html>
