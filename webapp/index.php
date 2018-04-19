<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    
    <? 
    session_start();
  
    if(empty($_SESSION['email'])){
        header('location: ../login/login.php');
    }
    
require('connect.php');
    
    
    ?>
    
    
     <link rel="icon" type="image/png" href="../login/img/volano.png"/>
<title>Badminton Clubs</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Design Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Portfolio-CSS -->	<link rel="stylesheet" href="css/swipebox.css" type="text/css" media="all">
		
<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->

<link rel="stylesheet" href="css/index.css"><!-- skills bars CSS-->

<!-- custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme -->
	  
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->

<!-- googlefonts
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900&amp;subset=arabic,latin-ext" rel="stylesheet">
<!-- //googlefonts -->

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- banner -->
<div class="" id="home">
	<div class="-dot">
		<div class="">
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
                          
						<li><a href="#"  data-toggle="modal" data-target="#myModal">Notifications</a></li>
				
							<!--  <li><a class="page-scroll scroll" href="#skills">Friends</a></li>
							<ul >
              <li><a href="#" class="page-scroll scroll dropdown-menu">Drop fgdfg 1</a></li>
              <li><a href="#" class="page-scroll scroll dropdown-menu">Drop Down 3</a></li>
             
                                  
                            </ul>
                                       <li>
                            <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle page-scroll scroll" style=" color:white;"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notifications</a>
  <div class="dropdown-content">
    
        <!--  <a class="dropdown-item" href="myprofile.php">My Profile</a>
          <a class="dropdown-item" href="settings.php">Settings</a>
          <a class="dropdown-item" href="../login/logout.php">Logout</a>
      
  </div>
</div>
                                </li>-->
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
            


			
			<!--<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-arrows-v" aria-hidden="true"></i>
				</a>
			</div>-->
		</div>
	</div>
</div>
<!-- banner -->

<br><br>

<!-- skills -->
<div class="skills" id="skills">
	<div class="container">
				<h3 data-aos="zoom-in">Homepage</h3>
		<div class="skill-grids">
			<div class="col-md-6 skill-grids-left">
                
                <h3 data-aos="zoom-in">New users</h3>
                
                
				<div data-aos="flip-left" class="col-md-6 w3labout-img"> 
				<div class="boxw3-agile"> 
					<img src="images/s1.jpg" alt="" class="img-responsive" />
					<div class="agile-caption">
						<h3>Html5</h3>
						<p>Lorem ipsum dolor sit amet.</p>
					</div> 
				</div>
				</div>
				<div data-aos="flip-right" class="col-md-6 w3labout-img"> 
				<div class="boxw3-agile"> 
					<img src="images/s2.jpg" alt="" class="img-responsive" />
					<div class="agile-caption">
						<h3>Php</h3>
						<p>Lorem ipsum dolor sit amet.</p>
					</div> 
				</div>
				</div>
				<div class="clearfix"></div>
				<div  data-aos="flip-left" class="col-md-6 w3labout-img"> 
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
			</div>
			<div class="col-md-6 skill-grids-right">
                
                <h3 data-aos="zoom-in">Club ranking</h3>
					
			<!-- Skills -->
                <?
                
                $query="SElECT score FROM club ORDER BY score desc limit 1";
                $m=mysqli_query($connection,$query);
                $maxscore=0;
                while($row = mysqli_fetch_assoc($m)) {
    $maxscore=$row['score'];
    }
               
                
                $query="SElECT * FROM club ORDER BY score desc limit 7";
                $result=mysqli_query($connection,$query);
                
              
                while($row = $result->fetch_assoc()) {
                    
                    $s=($row['score']/$maxscore)*100;
            
     		echo '<div class="skillbar clearfix " data-percent="'.$s.'%">
				<div class="skillbar-title" style="background: '.$row['color'].';"><span>'.$row['name'].'</span></div>
				<div class="skillbar-bar" style="background: '.$row['color'].';"></div>
				<div class="skill-bar-percent">'.$row['score'].'</div>
			</div>';
                }

                
                ?>
			 

			<!-- //Skills -->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //skills -->

<!-- /education -->
 <div class="education" id="education">
	    <div class="col-md-5 education-w3l">
		     <h3 data-aos="zoom-in" class="w3l_head three">My Education</h3>
			  <div class="education-agile-grids">
				  <div class="education-agile-w3l">
				     <div class="education-agile-w3l-year">
					       <h4>2014-2015</h4>
						   <h6>Master Degree</h6>
				     </div>
					 <div class="education-agile-w3l-info">
					       <h4>Computer University</h4>
						   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. commodo ligula eget.</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				  <div class="education-agile-w3l two">
				     <div class="education-agile-w3l-year">
					       <h4>2010-2012</h4>
						   <h6>Master Degree</h6>
				     </div>
					 <div class="education-agile-w3l-info">
					       <h4>Computer University</h4>
						   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. commodo ligula eget.</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				  <div class="education-agile-w3l">
				     <div class="education-agile-w3l-year last">
					       <h4>2008-2010</h4>
						   <h6>Master Degree</h6>
				     </div>
					 <div class="education-agile-w3l-info last">
					       <h4>Computer University</h4>
						   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. commodo ligula eget.</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				 
			  </div>
		</div>
		
		<div data-aos="slide-up" class="col-md-2 middle">
			<i class="fa fa-hourglass-end" aria-hidden="true"></i>
		</div>
		
	    <div class="col-md-5 education-w3l">
		     <h3 data-aos="zoom-in" class="w3l_head three">My Experience</h3>
			  <div class="education-agile-grids">
				  <div class="education-agile-w3l">
				     <div class="education-agile-w3l-year">
					       <h4>2013-2015</h4>
						   <h6>Lorem ipsum</h6>
				     </div>
					 <div class="education-agile-w3l-info">
					       <h4>Web Developer</h4>
						   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. commodo ligula eget.</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				  <div class="education-agile-w3l two">
				     <div class="education-agile-w3l-year">
					       <h4>2012-2013</h4>
						   <h6>Lorem ipsum</h6>
				     </div>
					 <div class="education-agile-w3l-info">
					       <h4>App Developer</h4>
						   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. commodo ligula eget.</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				  <div class="education-agile-w3l">
				     <div class="education-agile-w3l-year last">
					       <h4>208-2010</h4>
						   <h6>Lorem ipsum</h6>
				     </div>
					 <div class="education-agile-w3l-info last">
					       <h4>Graphic Designer</h4>
						  	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. commodo ligula eget.</p>
						  
				     </div>
				      <div class="clearfix"></div>
				  </div>
				 
			  </div>
		</div>
		 <div class="clearfix"> </div>
		</div>
 <!-- //education -->
 
 <!-- Portfolio -->
	<div class="portfolio" id="portfolio">
		<h3 data-aos="zoom-in" >Portfolio</h3>

		<div class="tabs tabs-style-bar">
			<nav>
				<ul>
					<li><a href="#section-bar-1" class="icon icon-box"><span>Web Design</span></a></li>
					<li><a href="#section-bar-2" class="icon icon-display"><span>Mobile Apps</span></a></li>
					<li><a href="#section-bar-3" class="icon icon-upload"><span>UI/UX Design</span></a></li>
					<li><a href="#section-bar-4" class="icon icon-tools"><span>Graphic Design</span></a></li>
				</ul>
			</nav>

			<div class="content-wrap">

				<!-- Tab-1 -->
				<section id="section-bar-1" class="agileits w3layouts">
					<h4>Web Design</h4>
					<div class="gallery-grids">
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/5.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/5.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Web Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p4.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p4.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Web Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p5.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p5.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Web Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p6.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p6.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Web Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p7.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p7.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Web Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p8.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p8.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Web Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p9.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p9.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Web Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p10.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p10.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Web Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p11.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p11.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Web Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</section>
				<!-- //Tab-1 -->

				<!-- Tab-2 -->
				<section id="section-bar-2" class="agileits w3layouts">
					<h4>Mobile Apps</h4>
					<div class="gallery-grids">
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p1.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p1.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Mobile Apps</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p2.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p2.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Mobile Apps</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p3.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p3.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Mobile Apps</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p12.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p12.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Mobile Apps</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p13.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p13.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Mobile Apps</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/8.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/8.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Mobile Apps</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/9.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/9.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Mobile Apps</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/6.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/6.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Mobile Apps</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/7.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/7.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>Mobile Apps</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</section>
				<!-- //Tab-2 -->

				<!-- Tab-3 -->
				<section id="section-bar-3" class="agileits w3layouts">
					<h4>UI/UX Design</h4>
					<div class="gallery-grids">
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p1.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p1.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>UI/UX Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p2.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p2.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>UI/UX Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p3.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p3.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>UI/UX Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p4.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p4.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>UI/UX Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p5.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p5.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>UI/UX Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
								<a href="images/p6.jpg" class="swipebox">
									<figure class="effect-bubba">
										<img src="images/p6.jpg" alt="" class="img-responsive">
										<figcaption>
										<h4>UI/UX Design</h4>
										</figcaption>
									</figure>
								</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p7.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p7.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>UI/UX Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p8.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p8.jpg" alt="" class="img-responsive">
									<figcaption>
										<h4>UI/UX Design</h4>
									</figcaption>
								</figure>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 gallery-top">
							<a href="images/p9.jpg" class="swipebox">
								<figure class="effect-bubba">
									<img src="images/p9.jpg" alt="" class="img-responsive">
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

				<!-- Tab-4 -->
				<section id="section-bar-4" class="agileits w3layouts">
					<h4>Graphic Design</h4>
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
				</section>
				<!-- //Tab-4 -->
				
			</div><!-- //Content -->
		</div><!-- //Tabs -->
</div>
<!-- //Portfolio -->

<!-- contact -->
<div class="contact" id="contact">
	<div class="container">
		<div class="col-md-6 contact-left">
			<h3 data-aos="zoom-in" >contact me</h3>
				<p>Lorem ipsum primis in faucibus. Praesent faucibus massa elit, vitae ultrices libero dapibus nec. 
					Maecenas cursus rutrum odio ut convallis. Curabitur viverra est in diam tincidunt, nec tincidunt tortor dapibus.</p>
			<form action="#" method="post">
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="text" name="Subject" placeholder="Company Name" required="">
					</div>
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Phone" placeholder="Phone" required="">
					</div>
				<div class="clearfix"> </div>
				<textarea name="Message" placeholder="Message..." required=""></textarea>
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="col-md-6 contact-right">
			<div data-aos="flip-down" class="col-md-6 contactright1">
			<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
			<h4>Location</h4>
			<p>1680 Richmond St, London, ON N6G 3Y9, Canada</p>
			</div>
			<div data-aos="flip-down" class="col-md-6 contactright1">
			<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
			<h4>Phone</h4>
			<p>+0(12) 000 123 3120</p>
			<p>+0(12) 000 123 3121</p>
			</div>
			<div class="clearfix"></div>
			<div data-aos="flip-up"class="col-md-6 contactright1">
			<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
			<h4>Support</h4>
			<p><a href="mailto:info@example.com">info@support.com</a></p>
			</div>
			<div data-aos="flip-up" class="col-md-6 contactright1">
			<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
			<h4>Mail</h4>
			<p><a href="mailto:info@example.com">info@example.com</a></p>
			<p><a href="mailto:info@example.com">info@example1.com</a></p>
			</div>
			<div class="clearfix"></div>
			<ul class="top-links">
				<li data-aos="flip-right"><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li data-aos="flip-right"><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li data-aos="flip-right"><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li data-aos="flip-right"><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->

<!-- map -->
<div class="map">
	<h3 data-aos="zoom-in" >Locate Me</h3>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2916.728658933401!2d-81.28171468446989!3d43.026098179147766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882eee436c9b672f%3A0xbb99862bef7c6ace!2s1680+Richmond+St%2C+London%2C+ON+N6G+3Y9%2C+Canada!5e0!3m2!1sen!2sin!4v1496125001525"></iframe>
</div>
<!-- //map -->

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
					[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
						new CBPFWTabs( el );
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

<script src="js/index.js"></script><!-- skills bars JS FILE-->
	
<!-- animation effects-js files-->
	<script src="js/aos.js"></script><!-- //animation effects-js-->
	<script src="js/aos1.js"></script><!-- //animation effects-js-->
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
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

</body>
</html>