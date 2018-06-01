<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <?php 
    session_start();
    include 'ChromePhp.php';
    
            require('connect.php');
    
    
   
  
    if(empty($_SESSION['email'])){
        header('location: ../login/login.php');
    }
    
    
    
            
    //andando a prendere gli elementi dal login se modifichi gli elementi non si aggiornano
 //$user= mysqli_query($connection, 'select * from users where email="'.$_SESSION['email'].'"');
// $row = $user->fetch_assoc();
    
    
$row = $_SESSION['row'];   
           
             $email=$row['email'];
             $name=$row['name'];
             $surname=$row['surname'];
             $bio=$row['user_shortbio'];
             $country=$row['user_country'];
             $gender=$row['gender'];
             $birth=$row['birth'];
             $userimg=$row['user_avatar'];
             $win=$row['won'];
             $lost=$row['lost'];
             $club=$row['club'];
    
$userimages = $_SESSION['userimages'];
$img1=$userimages['img1'];
$img2=$userimages['img2'];   
$img3=$userimages['img3'];   
$img4=$userimages['img4'];   
    
?>
        <link rel="icon" type="image/png" href="../login/img/volano.png" />
        <title>
            <?php echo $name." ".$surname ?>
        </title>
        <!-- <?php //echo $name." ".$surname ?> ???-->
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="My Design Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }

        </script>

        <!-- Portfolio-CSS -->
        <link rel="stylesheet" href="css/swipebox.css" type="text/css" media="all">

        <link href="css/aos.css" rel="stylesheet" type="text/css" media="all" />
        <!-- //animation effects-css-->

        <link rel="stylesheet" href="css/index.css">
        <!-- skills bars CSS-->

        <!-- custom-theme -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- //custom-theme -->

        <!-- font-awesome-icons -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- //font-awesome-icons -->

        <!-- googlefonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900&amp;subset=arabic,latin-ext" rel="stylesheet">
        <!-- //googlefonts 

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- banner -->
        <div class="banner" id="home">

            <div class="agileinfo-dot">
                <div class="container">
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
                                                <!--commento-->
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




                    <div style="float:right; margin-top:7%" class="col-md-6 skill-grids-left">
                        <div data-aos="flip-left" class="col-md-6 w3labout-img">
                            <div class="boxw3-agile">

                                <img src="<?php echo $img1; ?>" alt="" class="img-responsive" />
                                <div class="agile-caption">
                                    <form action="uploadimage.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" value="1" name="imgnumber">
                                        <input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload">
                                        <label for="fileToUpload" class="lbl">Select image</label>
                                        <input type="submit" value="Upload Image" name="submit">

                                        <script>
                                            var input = document.querySelector('.fileToUpload');
                                            input.style.opacity = 0;

                                        </script>


                                    </form>
                                </div>
                            </div>
                        </div>
                        <div data-aos="flip-right" class="col-md-6 w3labout-img">
                            <div class="boxw3-agile">
                                <img src="<?php echo $img2; ?>" alt="" class="img-responsive" />
                                <div class="agile-caption">
                                    <form action="uploadimage.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" value="2" name="imgnumber">
                                        <input type="file" class="fileToUpload1" name="fileToUpload" id="fileToUpload1">
                                        <label for="fileToUpload1" class="lbl">Select image</label>
                                        <input type="submit" value="Upload Image" name="submit">

                                        <script>
                                            var input = document.querySelector('.fileToUpload1');
                                            input.style.opacity = 0;

                                        </script>


                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div data-aos="flip-left" class="col-md-6 w3labout-img">
                            <div class="boxw3-agile">
                                <img src="<?php echo $img3; ?>" alt="" class="img-responsive" />
                                <div class="agile-caption">
                                    <form action="uploadimage.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" value="3" name="imgnumber">
                                        <input type="file" class="fileToUpload2" name="fileToUpload" id="fileToUpload2">
                                        <label for="fileToUpload2" class="lbl">Select image</label>
                                        <input type="submit" value="Upload Image" name="submit">

                                        <script>
                                            var input = document.querySelector('.fileToUpload2');
                                            input.style.opacity = 0;

                                        </script>


                                    </form>
                                </div>
                            </div>
                        </div>
                        <div data-aos="flip-right" class="col-md-6 w3labout-img">
                            <div class="boxw3-agile">
                                <img src="<?php echo $img4; ?>" alt="" class="img-responsive" />
                                <div class="agile-caption">
                                    <form action="uploadimage.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" value="4" name="imgnumber">
                                        <input type="file" class="fileToUpload3" name="fileToUpload" id="fileToUpload3">
                                        <label for="fileToUpload3" class="lbl">Select image</label>
                                        <input type="submit" value="Upload Image" name="submit">


                                        <script>
                                            var input = document.querySelector('.fileToUpload3');
                                            input.style.opacity = 0;

                                        </script>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <style>
                            .lbl {
                                background-color: #7F9CCB;
                                padding: 5px 10px;
                                border-radius: 5px;
                                border: 1px ridge black;
                                font-size: 0.8rem;
                                height: auto;
                            }

                            .lbl:hover {
                                background-color: #2D5BA3;
                                color: white;
                            }

                            .lbl:active {
                                background-color: #0D3F8F;
                                color: white;
                            }

                        </style>
                    </div>





                    <div class="w3_banner_info">
                        <div>

                            <style>
                                .d-block {
                                    display: block!important;
                                }

                                .rounded-circle {
                                    border-radius: 50%!important;
                                }

                                .img-fluid {
                                    max-width: 50%;
                                    height: auto;
                                    margin-top: -20%;
                                }

                                img {

                                    border-style: none;
                                }

                            </style>
                            <div class="imm">
                                <form action="upload.php" method="post" id='autouploadform' enctype="multipart/form-data">
                                    <input type="file" name="fileToUpload" id="fup">
                                    <label for="fup">
                                <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo $userimg;  ?>">
                                </label>
                                    <script>
                                        var input = document.querySelector('#fup');
                                        input.style.opacity = 0;
                                        document.getElementById("fup").onchange = function() {
                                            document.getElementById("autouploadform").submit();
                                        };

                                    </script>
                                </form>
                            </div>
                            <div class="w3_banner_info_grid">

                                <h2 data-aos="fade-right">
                                    <?php echo $name." ".$surname ?>
                                </h2>

                                <!--<h5>UI/UX Designer.</h5>-->
                                <p>
                                    <?php echo $bio ?>
                                </p>
                                <ul data-aos="slide-up">
                                    <li><a href="#" class="w3ls_more" data-toggle="modal" data-target="#myModal">More info</a></li>

                                </ul>
                            </div>
                        </div>



                    </div>
                    <!--<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-arrows-v" aria-hidden="true"></i>
				</a>
			</div>-->
                </div>
            </div>
        </div>
        <!-- banner -->

    
        <!-- bootstrap-modal-pop-up -->
        <!-- modal -->
        <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Information</h4>
                    </div>
                    <div class="modal-body">
                        <div class="modalpad">
                            <div class="modalpop ">
                                <img src="<?php echo $userimg ?>"  class="img-responsive" alt=""  />
                            </div>
                            <div class="about-modal wthree">
                                <h3> <span><?php echo $name." ".$surname ?></span></h3>
                                <!--<h4>UI/UX Designer</h4>-->
                                <ul class="address">
                                    <li>
                                        <ul class="agileits-address-text ">
                                            <li><b>BIRTHDAY</b></li>
                                            <!--D.O.B-->
                                            <li>
                                                <?php echo $birth ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="agileits-address-text">
                                            <li><b>COUNTRY </b></li>
                                            <li>
                                                <?php  echo $country ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="agileits-address-text">
                                            <li><b>GENDER </b></li>
                                            <li>
                                                <?php  echo $gender ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="agileits-address-text">
                                            <li><b>E-MAIL </b></li>
                                            <li>
                                                <a>
                                                    <?php  echo $email ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <?php 
    $NC="SELECT name from club where id='".$club."'";
                                    $nclub = mysqli_query($connection, $NC);
                                     $c = $nclub->fetch_assoc(); 
                                    $ncc=$c['name'];
    
    ?>
                                        <ul class="agileits-address-text">
                                            <li><b>CLUB </b></li>
                                            <li><a href="#"><?php echo $ncc ?></a></li>
                                            <!-- mettere club in db -->
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //modal -->
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
                <div class="modal-content" >
                    <div class="modal-header" style="background-color:<?php echo $color ?>">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white"><span aria-hidden="true">&times;</span></button>
                        
                    </div>
                    <div class="modal-body" >
                        <div class="modalpad">
                            
                                <!-- <div class="modalpop ">
                            <img src="images/5.jpg" class="img-responsive" alt="" />
                        </div>-->
                                <div class="about-modal wthree">
                                    <h3> <span ><?php echo "".$clubname." " ?></span></h3>
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
                                    <button style="margin-left:35%; color:red; background-color:transparent; border:none;" name="esci">LEAVE CLUB</button>
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
        <!--//modal4-->

        <!-- modal -->
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
                                        <!--<li>
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
                                        </li>-->
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
        <!--//modal4-->
        <!-- //bootstrap-modal-pop-up -->


        <!-- skills -->
        <div class="skills" id="skills">
            <div class="container">
                <h3 data-aos="zoom-in">Skills</h3>
                <div class="skill-grids">
                   <!-- <div class="col-md-6 skill-grids-left">
                        <div data-aos="flip-left" class="col-md-6 w3labout-img">
                            <div class="boxw3-agile">
                                <img src="images/s1.jpg" alt="" class="img-responsive" />
                                <div class="agile-caption">
                                    <h3>CLUB</h3>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="flip-right" class="col-md-6 w3labout-img">
                            <div class="boxw3-agile">
                                <img src="images/s2.jpg" alt="" class="img-responsive" />
                                <div class="agile-caption">
                                    <h3>Tournaments history</h3>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div data-aos="flip-left" class="col-md-6 w3labout-img">
                            <div class="boxw3-agile">
                                <img src="images/s3.jpg" alt="" class="img-responsive" />
                                <div class="agile-caption">
                                    <h3>Jquery</h3>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="flip-right" class="col-md-6 w3labout-img">
                            <div class="boxw3-agile">
                                <img src="images/s4.jpg" alt="" class="img-responsive" />
                                <div class="agile-caption">
                                    <h3>JavaScript</h3>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>-->
                    <div class="col-md-12 skill-grids-right">
                        
                        <?php
                        
                          if(($win+$lost)==null){
                              $wr=0;
                          }else{
                              $wr=($win/($win+$lost))*100;
                          }
                         
                        ?>

                        <!-- Skills -->
                        <div class="skillbar clearfix " data-percent="<?php echo $wr ?>%">
                            <div class="skillbar-title" style="background: #ff0000;"><span>Win Rate</span></div>
                            <div class="skillbar-bar" style="background: #ff0000;"></div>
                            <div class="skill-bar-percent"><?php echo $wr."%" ?></div>
                        </div>
                        <!-- End Skill Bar -->

                        <div class="skillbar clearfix " data-percent="75%">
                            <div class="skillbar-title" style="background: #ff9900;"><span>Club Win Rate</span></div>
                            <div class="skillbar-bar" style="background: #ff9900;"></div>
                            <div class="skill-bar-percent">75%</div>
                        </div>
                        <!-- End Skill Bar -->

                        <div class="skillbar clearfix " data-percent="60%">
                            <div class="skillbar-title" style="background: #8e43e7;"><span>Global Rank</span></div>
                            <div class="skillbar-bar" style="background: #8e43e7;"></div>
                            <div class="skill-bar-percent">3</div>
                        </div>
                        <!-- End Skill Bar 

                        <div class="skillbar clearfix " data-percent="40%">
                            <div class="skillbar-title" style="background: #146eb4;"><span>PHP</span></div>
                            <div class="skillbar-bar" style="background: #146eb4;"></div>
                            <div class="skill-bar-percent">40%</div>
                        </div>
                        <!-- End Skill Bar 

                        <div class="skillbar clearfix " data-percent="75%">
                            <div class="skillbar-title" style="background: #11b563;"><span>Wordpress</span></div>
                            <div class="skillbar-bar" style="background: #11b563;"></div>
                            <div class="skill-bar-percent">75%</div>
                        </div>
                        <!-- End Skill Bar -

                        <p class="p1">Etiam sit amet porttitor nulla. Nullam tincidunt lectus vel euismodpulvi nar. Aenean a facilisis augue, at convallis lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent faucibus massa elit, vitae ultrices libero dapibus nec. Maecenas cursus rutrum odio ut convallis.</p>
                        <!-- //Skills -->
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //skills -->



        <!-- Portfolio -->
        <div class="portfolio" id="portfolio">
            <h3 data-aos="zoom-in">Activity</h3>



            <div class="tabs tabs-style-bar">
                <nav>
                    <ul>
                        <li><a href="#section-bar-1" class="icon icon-box"><span>Tournaments</span></a></li>
                        <li><a href="#section-bar-2" class="icon icon-display"><span>Friends</span></a></li>
                        <!--<li><a href="#section-bar-3" class="icon icon-upload"><span>Club</span></a></li>-->
                        <!--<li><a href="#section-bar-4" class="icon icon-tools"><span>Graphic Design</span></a></li>-->
                    </ul>
                </nav>

                <div class="content-wrap">
                    

                    
                    <!-- Tab-1 -->
                       <section id="section-bar-1" class="agileits w3layouts">
                        <h4>Tournaments</h4>
                        <div class="gallery-grids">


                            <?php
   // $touq = "(select name from participant as f,users as u where f.player='".$email."')"; doppioni
   
   //select * from participant,tournaments where player=email and participant.id=tournament.id
    $tourq="SELECT * from participant,tournament where participant.player='".$email."' and participant.id=tournament.id";
    $tous = mysqli_query($connection, $tourq);
    
      if ($tous->num_rows > 0) {
        while($row = $tous->fetch_assoc()) {
     		 echo '<div class="col-md-4 col-sm-4 gallery-top">
                                
                                    <figure class="effect-bubba">
                                        <img src="../images/volds.jpg" alt="" class="img-responsive">
                                        <figcaption>

                                            <h4>
                                                 <a href="tournament.php?id='.$row['id'].'">'.$row['name'].'
                                                </a>
                                            </h4>
                                        </figcaption>
                                    </figure>
                            </div>';
        }
    } else {
        echo "<p style='text-align:center'>You don't have any tournaments</p>";
    }

    ?>
                                <div class="clearfix"></div>
                        </div>
                    </section>
                    <!-- //Tab-1 -->




                    <!-- Friends -->
                    <section id="section-bar-2" class="agileits w3layouts">
                        <h4>Friends</h4>
                        <div class="gallery-grids">


                            <?php
    $friendsq = "(select * from friendship as f,users as u where f.id1=u.email and f.id2='".$email."') union
                 (select * from friendship as f,users as u where f.id2=u.email and f.id1='".$email."')";
   
   
    
    $friends = mysqli_query($connection, $friendsq);
    
      if ($friends->num_rows > 0) {
        while($row = $friends->fetch_assoc()) {
     		 echo '<div class="col-md-4 col-sm-4 gallery-top">
                                
                                    <figure class="effect-bubba">
                                        <img src="'.$row['user_avatar'].'" alt="" class="img-responsive">
                                        <figcaption>

                                            <h4>
                                                <a href="profile.php?user='.$row['email'].'">'.$row['name'].'
                                                </a>
                                            </h4>
                                        </figcaption>
                                    </figure>
                            </div>';
        }
    } else {
        echo "<p style='text-align:center'>You don't have any friends</p>";
    }

    ?>
                                <div class="clearfix"></div>
                        </div>
                    </section>
                    <!-- //Tab-2 -->

                    <!-- Tab-3 -
                    <section id="section-bar-3" class="agileits w3layouts">
                        <h4>
                            <!-- nome club--Club</h4>
                        <div class="gallery-grids">
                            <!-- <div class="col-md-12 col-sm-12 gallery-top">
                            <a href="images/p1.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/p1.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4>UI/UX Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>--
                            <iframe src="club.html" frameborder=0 name="Portale" width=100% height=100%></iframe>
                            <div class="clearfix"></div>
                        </div>
                    </section>
                    <!-- //Tab-3 -->

                    <!-- Tab-4 -->
                    <!--   <section id="section-bar-4" class="agileits w3layouts">
                    <h4>Club</h4>
                    <div class="gallery-grids">
                        <div class="col-md-4 col-sm-4 gallery-top">
                            <a href="images/p10.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/p10.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4>Graphic Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 gallery-top">
                            <a href="images/p11.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/p11.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4>Graphic Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 gallery-top">
                            <a href="images/p12.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/p12.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4>Graphic Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 gallery-top">
                            <a href="images/p13.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/p13.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4>Graphic Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 gallery-top">
                            <a href="images/p5.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/p5.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4>Graphic Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 gallery-top">
                            <a href="images/p6.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/p6.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4>Graphic Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 gallery-top">
                            <a href="images/p7.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/p7.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4>Graphic Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 gallery-top">
                            <a href="images/p8.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/p8.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4>Graphic Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 gallery-top">
                            <a href="images/p9.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/p9.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4>Graphic Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>-->
                    <!-- //Tab-4 -->

                </div>
                <!-- //Content -->
            </div>
            <!-- //Tabs -->
        </div>
        <!-- //Portfolio -->



        <!-- copyright -->
        <div class="copyright-agile">
            <div class="container">
                <h4> Badminton Clubs</h4>
                <p>© 2018 Badminton Clubs. All rights reserved | Design by Marco Bissessur</p>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- copyright -->

        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- //js -->

        <!-- Gallery-Tab-JavaScript -->
        <script src="js/cbpFWTabs.js"></script>
        <script>
            (function() {
                [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                    new CBPFWTabs(el);
                });
            })();

        </script>
        <!-- //Gallery-Tab-JavaScript -->
        <!-- Swipe-Box-JavaScript -->
        <script src="js/jquery.swipebox.min.js"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $(".swipebox").swipebox();
            });

        </script>
        <!-- //Swipe-Box-JavaScript -->

        <!-- Scrolling Nav JavaScript -->
        <script src="js/scrolling-nav.js"></script>
        <!-- //fixed-scroll-nav-js -->

        <script src="js/index.js"></script>
        <!-- skills bars JS FILE-->

        <!-- animation effects-js files-->
        <script src="js/aos.js"></script>
        <!-- //animation effects-js-->
        <script src="js/aos1.js"></script>
        <!-- //animation effects-js-->
        <!-- animation effects-js files-->

        <!-- //here starts scrolling icon -->
        <script src="js/SmoothScroll.min.js"></script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <!-- here stars scrolling script -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                	var defaults = {
                	containerID: 'toTop', // fading element id
                	containerHoverID: 'toTopHover', // fading element hover id
                	scrollSpeed: 1200,
                	easingType: 'linear' 
                	};
                */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });

        </script>
        <!-- //here ends scrolling script -->
        <!-- //here ends scrolling icon -->

        <!-- scrolling script -->
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });

        </script>
        <!-- //scrolling script -->

        </body>

</html>
