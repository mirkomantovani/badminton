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
    <?php session_start();
    include 'ChromePhp.php';
    
            require('connect.php');
    
    
   
  
    if(empty($_SESSION['email'])){
        header('location: ../login/login.php');
    }
    
    
    
            
    //andando a prendere gli elementi dal login se modifichi gli elementi non si aggiornano
 //$user= mysqli_query($connection, 'select * from users where email="'.$_SESSION['email'].'"');
// $row = $user->fetch_assoc();
    
    $id=$_GET['id'];
    $club=mysqli_query($connection, 'select * from club where id="'.$id.'"');

    $t = $club->fetch_assoc();
             $namec=$t['name'];
    
$row = $_SESSION['row'];   
           
             $email=$row['email'];
             $name=$row['name'];
             $surname=$row['surname'];
             $bio=$row['user_shortbio'];
             $country=$row['user_country'];
             $gender=$row['gender'];
             $birth=$row['birth'];
             $userimg=$row['user_avatar'];
             $clubsess=$row['club'];
 
    
 
    

?>
    <link rel="icon" type="image/png" href="../login/img/volano.png" />
    <title>
        <?php echo $namec; ?>
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
    <!-- //font-awesome-icons --
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/brackets.min.js"></script>
    <!-- googlefonts 
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900&amp;subset=arabic,latin-ext" rel="stylesheet">
        <!-- //googlefonts -->

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

                                                <img src="<? echo $userimg;  ?>" style=" border-radius: 50%!important;" /></div>

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

                <br><br><br>





                <div class="brackets">
                </div>


                <a id="clickk" name="clickk" class="page-scroll scroll" href="#" data-toggle="modal" data-target="#cc"></a>

                <script>
                    /*$(document).ready(function() {
                        $('#clickk').trigger('click');
                    });        a volte non funziona*/
                    window.onload=function(){
  document.getElementById("clickk").click();
};

                </script>

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
                                    <?
    
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
                                                        <li> <select name="participants">
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
    
   
        
    $clubcr="SELECT club.id,club.creator,users.name as nome,users.surname,club.name,club.description,club.score,club.color from club,users where users.club=club.id and users.email=club.creator";  
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
                <div class="modal about-modal fade" id="myclub" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
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
                                        <h4 class="modal-title">
                                            <?php echo "Created by:  <a href='profile.php?user=".$cremail."'>".$creator." ".$crsur."</a>" ?></h4>


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
                                                        <?php echo "".$score ?>
                                                        <!-- score tot membri fratto num membri-->
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
                <!--//modal4-->





                <?php    
    
   
                
    $clubcr="SELECT club.creator,users.name as nome,users.surname,club.name,club.description,club.score,club.color from club,users where club.id=".$id." and users.email=club.creator";  
    $infoclub = mysqli_query($connection, $clubcr);
        
     if ($infoclub->num_rows > 0) {
          $club = $infoclub->fetch_assoc(); 
        
  
    $cremail=$club['creator'];
    $creator=$club['nome'];
    $crsur=$club['surname'];
    $clubname=$club['name'];
    $desc=$club['description'];
    $score=$club['score'];
    $color=$club['color'];
    }                              
   
      ?>


                <div class="modal about-modal fade" id="cc" tabindex="-1" role="dialog" >
                    <div class="modal-dialog" role="document" >
                        <div class="modal-content" >
                            <div class="modal-header" style="background-color:<?php echo $color ?>">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                            </div>
                            <div class="modal-body" >
                                <div class="modalpad" >

                                    <!-- <div class="modalpop ">
                            <img src="images/5.jpg" class="img-responsive" alt="" />
                        </div>-->
                                    <div class="about-modal wthree" >
                                        <h3> <span><?php echo "".$clubname." " ?></span></h3>
                                        <h4 class="modal-title">
                                            <?php echo "Created by:  <a href='profile.php?user=".$cremail."'>".$creator." ".$crsur."</a>" ?></h4>


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
                                                        <?php echo "".$score ?>
                                                        <!-- score tot membri fratto num membri-->
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                        <hr>
                                        <ul class="list-group">

                                            <?php echo '<li class="list-group-item"><b>MEMBERS</b></li>';
    
                                        
                              
       $qmem="select * from clubmember,users where email=idmember and idclub='".$id."'";
       $membri = mysqli_query($connection, $qmem); 
            
            if ($membri->num_rows > 0) {
        while($row = $membri->fetch_assoc()) {
     		 echo ' <li class="list-group-item"> <a href="profile.php?user='.$row['email'].'">'.$row['name'].' '.$row['surname'].'</a> </li>';
        }
    } 
    
                                    ?>




                                        </ul>
                                                                      <?php 
    $check="SELECT * from clubmember where idmember='".$_SESSION['email']."'"; 
    $res = mysqli_query($connection, $check);
            
                
    if ($res->num_rows > 0) {
         echo '      <form action="leaveclub.php" method="get">
                                    <button style="margin-left:35%; color:red; background-color:transparent; border:none;" name="esci">LEAVE YOUR CLUB</button>
                                        </form>';
    } else {
        echo '  <form action="joinclub.php" method="get">
                                            <button style="margin-left:40%; color:green; background-color:transparent; border:none;" name="entra">JOIN</button>
                                            
                                            <input type="hidden" value='.$id.'  name="id">
                                        </form>';
    }
    
    ?>
                                       

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





                <!--//modal5-->




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
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright-agile">
        <div class="container">
            <h4> Badminton Clubs</h4>
            <p>© 2018 Badminton Clubs. All rights reserved | Design by Marco Bissessur</p>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- copyright -->
</body>

</html>
