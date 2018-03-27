<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link rel="stylesheet" href="css/swipebox.css" type="text/css" media="all">
		
<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->

<link rel="stylesheet" href="css/index.css"><!-- skills bars CSS-->

<!-- custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme -->
	  
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<title>Settings</title>
<?
session_start();
require('connect.php');

  
    if(empty($_SESSION['email'])){
        header('location: ../login/login.php');
    }
    
    
    $row = $_SESSION['row'];   
           
             $email=$row['email'];
             $name=$row['name'];
             $surname=$row['surname'];
             $bio=$row['user_shortbio'];
             $country=$row['user_country'];
             $gender=$row['gender'];
             $birth=$row['birth'];


?>

<!------ Include the above in your HEAD tag ---------->
<nav class="navbar navbar-default navbar-fixed-top"> 
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">My_Profile</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.html">Badminton Clubs</a></h1>
					</div> 
                
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-15">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
                            <li><!--<form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 page-scroll scroll" type="submit">Search</button>
        </form>-->  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 page-scroll scroll" type="submit">Search</button>
    </form></li>
							<li><a class="page-scroll scroll" href="#tournament">New Tournament</a></li>
							<li><a class="page-scroll scroll" href="#club">Club</a></li>
							<!--  <li><a class="page-scroll scroll" href="#skills">Friends</a></li>
							<ul >
              <li><a href="#" class="page-scroll scroll dropdown-menu">Drop fgdfg 1</a></li>
              <li><a href="#" class="page-scroll scroll dropdown-menu">Drop Down 3</a></li>
             
                                  
                            </ul>-->
                                       <li>
                            <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle page-scroll scroll" style=" color:white;"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notifications</a>
  <div class="dropdown-content">
    
        <!--  <a class="dropdown-item" href="myprofile.php">My Profile</a>
          <a class="dropdown-item" href="settings.php">Settings</a>
          <a class="dropdown-item" href="../login/logout.php">Logout</a>-->
      
  </div>
</div>
                                </li>
                            <li>
                            <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle page-scroll scroll" style=" width:64px;height: auto;" href="myprofile.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/userm64.png"  />
   
  </a>
  <div class="dropdown-content">
    
          <a class="dropdown-item" href="myprofile.php">My Profile</a>
          <a class="dropdown-item" href="settings.php">Settings</a>
          <a class="dropdown-item" href="../login/logout.php">Logout</a>
      
  </div>
</div>
                                </li>
                       
                           
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				<!-- /.container -->
			</nav> 
<br><br><br><br><br><br><br><br><br>
<div class="container">
  
        <div class="row">

            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu" style="margin-top:15px;">
                    
                    <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                    <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
                  <!--  <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>-->
                    <li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </div>

            <div class="col-md-9  admin-content" id="profile">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Name</h3>
                    </div>
                    <div class="panel-body">
                        <? echo $name ?> <button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>
                    </div>
                   
                </div>
                 
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Surname</h3>

                    </div>
                    <div class="panel-body">
                        <? echo $surname ?> <button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                    </div>
                    <div class="panel-body">
                       <? echo $email ?>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Birthday</h3>

                    </div>
                    <div class="panel-body">
                        <? echo $birth ?>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Gender</h3>

                    </div>
                    <div class="panel-body">
                        <? echo $gender ?><button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Country</h3>

                    </div>
                    <div class="panel-body">
                        <? echo $country ?><button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bio</h3>

                    </div>
                    <div class="panel-body">
                        <? echo $bio ?><button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>
                    </div>
                </div>

                
                <!--mettere country gender birthday ...-->
                
                
                
            </div>
   <div class="col-md-9  admin-content" id="settings">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Notification</h3>
                    </div>
                    <div class="panel-body">
                        <div class="label label-success">allowed</div>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Newsletter</h3>
                    </div>
                    <div class="panel-body">
                        <div class="badge">Monthly</div>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin</h3>

                    </div>
                    <div class="panel-body">
                         <div class="label label-success">yes</div>
                    </div>
                </div>

            </div>

            <div class="col-md-9  admin-content" id="change-password">
                <form action="/password" method="post">

           
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="new_password" class="control-label panel-title">New Password</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" id="new_password" >
                                </div>
                            </div>

                        </div>
                    </div>

             
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="confirm_password" class="control-label panel-title">Confirm password</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password_confirmation" id="confirm_password" >
                                </div>
                            </div>
                        </div>
                    </div>

           
                    <div class="panel panel-info border" style="margin: 1em;">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="pull-left">
                                    <input type="submit" class="form-control btn btn-primary" name="submit" id="submit" value="Save changes">
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <div class="col-md-9  admin-content" id="settings"></div>

            <div class="col-md-9  admin-content" id="logout">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Confirm Logout</h3>
                    </div>
                    <div class="panel-body">
                        Do you really want to logout ?  
                        <a  href="#" class="label label-danger"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span >   No   </span>
                        </a>    
                        <a href="../login/login.php" class="label label-success"> <span >  Yes   </span></a>
                    </div>
                    <form id="logout-form" action="#" method="POST" style="display: none;">
                    </form>



                </div>
            </div>
        </div>
</div>

<script>
         $(document).ready(function()
      {
        var navItems = $('.admin-menu li > a');
        var navListItems = $('.admin-menu li');
        var allWells = $('.admin-content');
        var allWellsExceptFirst = $('.admin-content:not(:first)');
        allWellsExceptFirst.hide();
        navItems.click(function(e)
        {
            e.preventDefault();
            navListItems.removeClass('active');
            $(this).closest('li').addClass('active');
            allWells.hide();
            var target = $(this).attr('data-target-id');
            $('#' + target).show();
        });
        });
</script>