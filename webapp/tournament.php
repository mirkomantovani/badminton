<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <? session_start();
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
            


?>
        <link rel="icon" type="image/png" href="../login/img/volano.png" />
        <title>
            <? echo $name." ".$surname ?>
        </title>
        <!-- <? //echo $name." ".$surname ?> ???-->
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
                            <h1><a class="navbar-brand" href="index.html">Badminton Clubs</a></h1>
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
                                        <button class="btn btn-outline-success my-2 my-sm-0 page-scroll scroll" type="submit">Search</button>
                                    </form>
                                </li>
                                <li><a class="page-scroll scroll" href="#tournament">New Tournament</a></li>
                                <li><a class="page-scroll scroll" href="#club">Club</a></li>

                                <li><a href="#" data-toggle="modal" data-target="#requests">Requests</a></li>

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
                </div>
                <!-- //header -->

                
                
                
                
                <br><br><br>
                
                
                
                <div class="brackets">
    </div>
                
                <script>

    var rounds;

    rounds = [


        //-- ronda 1
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111, url: 'http://www.google.com' },
                player2: { name: "Player 211", ID: 211 }
            },

            {
                player1: { name: "Player 112", winner: true, ID: 112 },
                player2: { name: "Player 212", ID: 212 }
            },

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 213", ID: 213 }
            },

            {
                player1: { name: "Player 114", winner: true, ID: 114 },
                player2: { name: "Player 214", ID: 214 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115, url: 'goggle.com' },
                player2: { name: "Player 215", ID: 215 }
            },

            {
                player1: { name: "Player 116", winner: true, ID: 116 },
                player2: { name: "Player 216", ID: 216 }
            },

            {
                player1: { name: "Player 117", winner: true, ID: 117 },
                player2: { name: "Player 217", ID: 217 }
            },

            {
                player1: { name: "Player 118", winner: true, ID: 118 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 2
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111 },
                player2: { name: "Player 212", ID: 212 }
            },

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 214", ID: 214 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115 },
                player2: { name: "Player 216", ID: 216 }
            },

            {
                player1: { name: "Player 117", winner: true, ID: 117 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 3
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111 },
                player2: { name: "Player 113", ID: 113 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 4
        [

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 218", winner: true, ID: 218 },
            },
        ],
        //-- Champion
        [

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
            },
        ],

    ];

    var titles = ['Round 1', 'Round 2', 'Round 3', 'Round 4', 'Round 5'];


    ;(function($){

        $(".brackets").brackets({
            titles: titles,
            rounds: rounds,
            color_title: 'black',
            border_color: 'green',
            color_player: 'black',
            bg_player: 'white',
            color_player_hover: 'white',
            bg_player_hover: 'green',
            border_radius_player: '10px',
            border_radius_lines: '10px',
        });

    })(jQuery);
</script>
                
                
                
                
                
                
                
                
                



              
    <!-- Portfolio --><br>
            <br>
                
    <div class="portfolio" id="portfolio">
        <h3 data-aos="zoom-in">Results</h3>



        <div class="tabs tabs-style-bar">
            <nav>
                <ul>
                    <li><a href="#section-bar-1" class="icon icon-box"><span>People</span></a></li>
                    <li><a href="#section-bar-2" class="icon icon-display"><span>Tournaments</span></a></li>
                    <li><a href="#section-bar-3" class="icon icon-upload"><span>Club</span></a></li>
                    
                </ul>
            </nav>

            <div class="content-wrap">

                




                <!-- Friends -->
                <section id="section-bar-2" class="agileits w3layouts">
                    <h4>People</h4>
                    <div class="gallery-grids">


                        <?
    
    $query = $_GET['query'];
    $fields = explode(' ',$query);
    $n = $fields[0];
    $s = $fields[1];
     
    $friendsq = "select * from users where name COLLATE UTF8_GENERAL_CI like '%".$n."%' and surname COLLATE UTF8_GENERAL_CI like '%".$s."%'";
   
   
    
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
        echo "<p style='text-align:center'>Your research didn't produce any results</p>";
    }

    ?>
                            <div class="clearfix"></div>
                    </div>
                </section>
                <!-- //Tab-2 -->
                
                <!-- Tab-1 -->
                <section id="section-bar-1" class="agileits w3layouts">
                    <h4>Tournaments</h4>
                    <div class="gallery-grids">
                        <div class="col-md-4 col-sm-4 gallery-top">
                            <a href="images/5.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/5.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <a>
                                            <? ?>
                                        </a>
                                        <h4>Web Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                       
                        <div class="clearfix"></div>
                    </div>
                </section>
                <!-- //Tab-1 -->

                <!-- Tab-3 -->
                <section id="section-bar-3" class="agileits w3layouts">
                    <h4>UI/UX Design</h4>
                    <div class="gallery-grids">
                        <div class="col-md-12 col-sm-12 gallery-top">
                            <a href="images/p1.jpg" class="swipebox">
                                <figure class="effect-bubba">
                                    <img src="images/p1.jpg" alt="" class="img-responsive">
                                    <figcaption>
                                        <h4>UI/UX Design</h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                       
                        <div class="clearfix"></div>
                    </div>
                </section>
                <!-- //Tab-3 -->

                

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
 </div>
        </div>
    </div>
</body>

</html>