<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <?php 
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
             $userimg=$row['user_avatar'];
    ?>
    
<meta charset="UTF-8">
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

   
                    <!-- header -->
                    <div class="header-w3layouts">
                        <!-- Navigation -->
                        <nav class="navbar navbar-default navbar-fixed-top">
                            <div class="navbar-header page-scroll">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">My_Profile</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
                                <h1><a class="navbar-brand" href="index.php">Badminton Clubs</a></h1>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav navbar-right cl-effect-15">
                                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                                    <li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
                                    <li>
                                        <!--<form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 page-scroll scroll" type="submit">Search</button>
        </form>-->
                                        <form action='search.php' method="get" class="form-inline my-2 my-lg-0">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="query" aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
                                        </form>
                                    </li>
                                    <li><a class="page-scroll scroll" href="#" data-toggle="modal" data-target="#tournament">New Tournament</a></li>
                                    <!--<li><a class="page-scroll scroll" href="#club">Club</a></li>-->
                                    <?php 
    $check="SELECT * from clubmember where idmember='".$_SESSION['email']."'"; 
    $res = mysqli_query($connection, $check);
            
                
    if ($res->num_rows > 0) {
         echo ' <li><a class="page-scroll scroll" href="#" data-toggle="modal" data-target="#myclub">Club</a></li>';
    } else {
        echo ' <li><a class="page-scroll scroll" href="#" data-toggle="modal" data-target="#newclub">Club</a></li>';
    }
    
    ?>
                           

                                    <li><a href="#" data-toggle="modal" data-target="#requests">Requests</a></li>

                                    <li>
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle page-scroll scroll" style=" width:64px;height: auto;" href="myprofile.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      
                                                <div name="img">

                                                    <img src="<?php echo $userimg;  ?>" style=" border-radius: 50%!important;" /></div>

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
                    </div>
                    <!-- //header -->

   
<div class="modal about-modal fade" id="requests" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Friend Requests</h4>
                    </div>
                    <div class="modal-body">
                        <div class="modalpad">

                            <style>
                                #blacktext {
                                    color: black;
                                }

                            </style>
                            <?php
    
    $sql = "SELECT * FROM friendrequest JOIN users on id1=email where id2='".$email."'";
    $result = mysqli_query($connection, $sql);
      
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
     		 echo "<div class='about-modal wthree'>
                            <h3> <span><a href='profile.php?user=" .$row['id1']."'>".$row['name']." ".$row['surname']."</span></h3>
                            <!--<h4>UI/UX Designer</h4>-->
                            <ul class='address'>
                                <li>
                                    <ul class='agileits-address-text'>

                                      <li><a href='acceptrequest.php?user=" .$row['id1']."' value='Accept'>Accept</li>
                                      <li><a href='declinerequest.php?user=" .$row['id1']."' value='Decline'>Decline</li>


                                      

                                    </ul>
                                </li>
                            </ul>
                        </div>";
        }
    } else {
        echo "<p style='text-align:center'>You don't have any friend requests</p>";
    }
    
           
                        ?>
                                <!--    <li>
                                            <form action='acceptrequest.php' method='get'><button class='scroll w3l_contact' id='blacktext'><i aria-hidden='true'></i>Accept</button><input type='hidden' name='user' value='".$row['id1']."'>
                                            </form>
                                        </li>

  <li>
                                            <form action='declinerequest.php' method='get'><button class='scroll w3l_contact' id='blacktext'><i aria-hidden='true'></i>Decline</button><input type='hidden' name='user' value='".$row['id1']."'>
                                            </form>
                                        </li>-->



                                <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //modal -->



        <div class="modal about-modal fade" id="tournament" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tournament</h4>
                    </div>
                    <form action="newtournament.php">
                        <div class="modal-body">
                            <div class="modalpad">
                                <!-- <div class="modalpop ">
                            <img src="images/5.jpg" class="img-responsive" alt="" />
                        </div>-->
                                <div class="about-modal wthree">
                                    <!--<h3> <span><?php //echo $name." ".$surname ?></span></h3>-->
                                    <input type=text placeholder="Name" value="" name="name">

                                    <!--<h4>UI/UX Designer</h4>-->
                                    <ul class="address">

                                        <li>
                                            <ul class="agileits-address-text">
                                                <li><b>DESCRIPTION </b></li>
                                                <li>
                                                    <input type="text" name="desc">
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="agileits-address-text">
                                                <li><b>GENDER </b></li>
                                                <li>
                                                    <select name="sex">
                                            <option>Male</option>
                                            <option>Female</option>
                                             <option>Mixed</option>
                                            </select>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="agileits-address-text">
                                                <li><b>TYPE </b></li>
                                                <li>
                                                    <select name="sd">
                                            <option>Single</option>
                                            <option>Double</option>
                                            </select>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="agileits-address-text">
                                                <li><b>PARTECIPANTS </b></li>
                                                <li>  <select name="participants">
                                            <option>2</option>
                                            <option>4</option>
                                            <option>8</option>
                                            <option>16</option>
                                            <option>32</option>
                                            </select></li>
                                                <!-- mettere club in db -->
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="clearfix">
                                </div>
                                <center>
                                    <input type="submit" class="btn btn-success" value="Create">
                                </center>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--//modal3-->
        <div class="modal about-modal fade" id="newclub" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Club</h4>
                    </div>
                    <div class="modal-body">
                        <div class="modalpad">
                            <form action="createclub.php" method="get" id="club">
                                <!-- <div class="modalpop ">
                            <img src="images/5.jpg" class="img-responsive" alt="" />
                        </div>-->
                                <div class="about-modal wthree">
                                    <!--<h3> <span><?php //echo $name." ".$surname ?></span></h3>-->

                                    <input type=text placeholder="Name" name="name" value="">

                                    <!--<h4>UI/UX Designer</h4>-->
                                    <ul class="address">

                                        <li>
                                            <ul class="agileits-address-text">
                                                <li><b>DESCRIPTION </b></li>
                                                <li>
                                                    <input type="text" name="desc">
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul class="agileits-address-text">
                                                <li><b>TYPE </b></li>
                                                <li>
                                                    <select name="type" form="club">
                                            <option>Aperto</option>
                                            <option>Su invito</option>
                                            </select>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="agileits-address-text">
                                                <li><b>PARTECIPANTS </b></li>
                                                <li> 50</li>
                                                <!-- mettere club in db -->
                                            </ul>
                                        </li>
                                        <li><input name="color" type="color" id="myColor">
                                        </li>
                                    </ul>

                                </div>
                                <div class="clearfix">
                                </div>
                                <center>
                                    <input type="submit" class="btn btn-success" value="Create">
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <?php    
    
   
        
    $clubcr="SELECT club.id,club.creator,users.name as nome,users.surname,club.name,club.description,club.score,club.color from club,users where users.club=club.id and users.email='".$_SESSION['email']."'";  
    $infoclub = mysqli_query($connection, $clubcr);
        
     if ($infoclub->num_rows > 0) {
          $club = $infoclub->fetch_assoc(); 
        
    $idc=$club['id'];
    $cremail=$club['cremail'];
    $creator=$club['nome'];
    $crsur=$club['surname'];
    $clubname=$club['name'];
    $desc=$club['description'];
    $score=$club['score'];
    $color=$club['color'];
    }                              
   
      ?>
    <!--//modal3-->
        <div class="modal about-modal fade" id="myclub" tabindex="-1" role="dialog" >
            <div class="modal-dialog" role="document" >
                <div class="modal-content" style="background-color:<?php echo $color ?>">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        
                    </div>
                    <div class="modal-body">
                        <div class="modalpad">
                            
                                <!-- <div class="modalpop ">
                            <img src="images/5.jpg" class="img-responsive" alt="" />
                        </div>-->
                                <div class="about-modal wthree">
                                    <h3> <span><?php echo "".$clubname." " ?></span></h3>
<h4 class="modal-title"><?php echo "Created by:  <a href='profile.php?user=".$cremail."'>".$creator." ".$crsur."</a>" ?></h4>
                                   

                                    <!--<h4>UI/UX Designer</h4>-->
                                    <ul class="address">

                                        <li>
                                            <ul class="agileits-address-text">
                                                <li><b>DESCRIPTION </b></li>
                                                <li>
                                                   <?php echo "".$desc ?>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul class="agileits-address-text">
                                                <li><b>SCORE </b></li>
                                                <li>
                                                    <?php echo "".$score ?>  <!-- score tot membri fratto num membri-->
                                                </li>
                                            </ul>
                                        </li>
                                      
                                    </ul>
                                    <hr>
                                    <ul class="list-group">
                                    
                                    <?php echo '<li class="list-group-item"><b>MEMBERS</b></li>';
    
                                        
                              
       $qmem="select * from clubmember,users where email=idmember and idclub='".$idc."'";
       $membri = mysqli_query($connection, $qmem); 
            
            if ($membri->num_rows > 0) {
        while($row = $membri->fetch_assoc()) {
     		 echo ' <li class="list-group-item"> <a href="profile.php?user='.$row['email'].'">'.$row['name'].' '.$row['surname'].'</a> </li>';
        }
    } 
    
                                    ?>
                                    
                                        
                                    
                                    
                                    </ul>
                                    <form action="leaveclub.php" method="get">
                                    <button style="margin-left:40%; color:red; background-color:transparent; border:none;">QUIT</button>
                                        </form>

                                </div>
                                <div class="clearfix">
                                </div>
                                <center>
                                    
                                </center>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br><br><br><br><br><br><br><br><br>
<div class="container">
  
    
        <div class="row">

            <div class="col-md-3">
                <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
                <ul class="nav nav-pills nav-stacked admin-menu" style="margin-top:30px;">
                    
                    <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                    <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
                    <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i> Change Profile</a></li>
                    <li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </div>

            
      
            
            <div class="col-md-9  admin-content" id="profile">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Name</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $name ?><!-- <button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>-->
                    </div>
                   
                </div>
                 
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Surname</h3>

                    </div>
                    <div class="panel-body">
                        <?php echo $surname ?> <!--<button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>-->
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                    </div>
                    <div class="panel-body">
                       <?php echo $email ?>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Birthday</h3>

                    </div>
                    <div class="panel-body">
                        <?php echo $birth ?>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Gender</h3>

                    </div>
                    <div class="panel-body">
                        <?php echo $gender ?><!--<button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>-->
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Country</h3>

                    </div>
                    <div class="panel-body">
                        <?php echo $country ?><!--<button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>-->
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bio</h3>

                    </div>
                    <div class="panel-body">
                        <?php echo $bio ?><!--<button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>-->
                    </div>
                </div>

                
                <!--mettere country gender birthday ...-->
                
                
                
            </div>
                
              <form action="modprofile.php" method="get">
            
   <div class="col-md-9  admin-content" id="settings">
              
          
     
            
            
               <div class="panel panel-info" style="margin: 1em;">
                   <div class="panel-body">
                       <input type="submit" class="form-control btn btn-primary" name="submit" id="submit" value="Save changes">
                    </div>
                  
                   
                </div>
                 
                
                
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Name</h3>
                    </div>
                    <div class="panel-body">
                        <input type="text" value="<?php echo $name ?>" name="nome">
                        <!-- <button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>-->
                    </div>
                   
                </div>
                 
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Surname</h3>

                    </div>
                    <div class="panel-body">
                         <input type="text" value="<?php echo $surname ?>" name="cognome">
                        <!--<button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>-->
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                    </div>
                    <div class="panel-body">
                       <?php echo $email ?>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Birthday</h3>

                    </div>
                    <div class="panel-body">
                         <input type="date" value="<?php echo $birth ?>" name="anni">
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Gender</h3>

                    </div>
                    <div class="panel-body">
                        <input type="text" value="<?php echo $gender ?>" name="sesso">
                        <!--<button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>-->
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Country</h3>

                    </div>
                    <div class="panel-body">
                        <input type="text" value="<?php echo $country ?>" name="paese">
                        <!--<button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>-->
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bio</h3>

                    </div>
                    <div class="panel-body">
                        
                         <input type="text" value="<?php echo $bio ?>" name="biog">
                        <!--<button style="float:right; border-color:lightblue; border-radius:150px">Edit</button>-->
                    </div>
                </div>

                
                <!--mettere country gender birthday ...-->
                
                
                
            </div>
                
                </form>

          <!--  </div>-->

            <div class="col-md-9  admin-content" id="change-password">
                <form action="passwordconf.php" method="post">

           
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
<br><br><br><br><br><br><br><br><br>
     
<div class="copyright-agile">
        <div class="container">
            <h4> Badminton Clubs</h4>
            <p>© 2018 Badminton Clubs. All rights reserved | Design by Marco Bissessur</p>
            <div class="clearfix"></div>
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