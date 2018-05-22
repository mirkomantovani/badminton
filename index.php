<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Badminton Clubs</title>
<link href="login/img/volano.png" rel="icon">
    <meta charset="UTF-8">
    
    
    <?php 
   
   
  
    if(empty($_SESSION['email'])){
        header('location: login/login.php');  //su internet mettere baminton/login/
    }
    ?>
    
    
    
      <!--   WORK IN PROGRESS-->
    
    
    
<!-- Custom Theme files -->
<link href="style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Search Box Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
    
<body>

<!--search start here-->
<center><img src="images/logo.png" style="margin-top:5rem;"/></center>
<div class="search">
	<i> </i>
	<div class="s-bar">
	   <form>
		<input type="text" value="Search Tournaments or Users" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Tournaments or Users';}">
		<input type="submit"  value="Search"/>
	  </form>
	</div>
	<!--<p>Popular searches: <a href="#">Modern PSD template,</a> <a href="#"> Portfolio design </a></p>-->
</div>
<!--search end here-->	
<!--<div class="copyright">
	 <p>2018 &copy Badminton Clubs All rights reserved | Template by  Bissessur Marco</p>
</div>	-->

</body>
</html>
