<!DOCTYPE html>
<html lang="en">
<?php
 session_start();
 ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SCHEDULE | BPL</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
				<h3 style="color:yellow"><b>BANGLADESH PREMIER LEAGUE</b></h3>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="HOME.php">HOME</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">TEAMS <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="TmDD.php">Dhaka Dynamites</a></li>
                            <li><a href="TmCV.php">Comilla Victorians</a></li>
                            <li><a href="TmChV.php">Chittagong Vikings</a></li>
							<li><a href="TmSS.php">Sylhet Superstars </a></li>
                            <li><a href="TmBB.php">Barisal Bulls</a></li>
							<li><a href="TmRR.php">Rangpur Riders</a></li>
                        </ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">GALLERY <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="photo.php">Photo</a></li>
                            <li><a href="video.php">Video</a></li>
                            
                        </ul>
                    </li>
                    <li class="active"><a href="schedule.php">SCHEDULE</a></li>
					<li><a href="blog.php">BLOG</a></li> 
                    <li><a href="ticket.php">TICKET</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MORE <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="archive.php">Archive</a></li>                                                    
							<li><a href="vision.php">BPL Vision</a></li>
							<li><a href="loginuser.php">Log in or Sign Up</a></li>
							<li class="divider"></li>
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
							<li><a href="terms.php">Terms of Use</a></li>
                        </ul>
                    </li>
					 <li><a style="color: orange" href="live.php">LIVE Score</a></li>
					
					<!--	///////////////////////////////////////////////////////////////////////////////////////////////////				-->
                                      		<?php
if (! empty($_SESSION['user']))
{
	
    ?>
								  <li class="dropdown">
									  <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNT<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-7">
                                                            <span>
															<?php
															//echo "<div class='awesomeText'>$u</div>";
															echo "<div style='font-size:130%; color:#CCFF33'>" .   $_SESSION['user'] . "</div>";
															//$Colorr = "#CCFF33";
															//echo '<div style="Color:'.$Colorr.'">'.$u.'</div>';	 
															?>
															</span>
                                                            
                                                            <div class="divider">
                                                            </div>
                                                            <a href="usercrud.php" class="btn btn-primary btn-sm active">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-footer">
                                                    <div class="navbar-footer-content">
                                                        
                                                            <div class="col-md-6">
                                                                <a href="logout.php" class="btn btn-default btn-sm pull-center">Sign Out</a>
                                                            </div>
                                                            
                                                        
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
									   <?php
}
else
{
  
}
 ?>  
                                
     <!--	///////////////////////////////////////////////////////////////////////////////////////////////////				--> 
                    
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1><b>Schedule<b></h1>
                    <p></p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="Home.php">Home</a></li>
                        <li class="active">Schedule</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title--> 
	
	<br><br><br><br><br>

    <section id="portfolio" class="container">
        

        <ul class="portfolio-items col-2">
            <li class="portfolio-item joomla dhaka">
                <div class="item-inner">
                    <img src="images/photos/thumb/DvC.jpg" alt="">
                    <h4>Dhaka Dynamites vs Comilla Victorians</h4>
					
					
					
                       <div class="teams">                     
							<strong class="match-info">Match 18  <br>Time: 8:00pm IST (2:30pm GMT) <br>Date:18-3-16</strong>           
							<div class="team">                           
								<div class="tLogo16x30 SRH"></div>                           
								<strong>Dhaka Dynamites</strong>                           
								<div class="tLogo70x SRH"></div>                       
							</div>
							<div class="team">
								<div class="tLogo16x30 KXIP"></div>
								<div class="tLogo70x KXIP"></div>
								<strong>Comilla Victorians</strong>
							</div>
							<strong class="match-info-mobile">Bongobondhu Stadium, Mirpur</strong>
						</div>       
               


			   </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla bootstrap">
                <div class="item-inner">
                    <img src="images/photos/thumb/SvB.jpg" alt="">
                    <h4>Barisal Bulls vs Sylhet Superstars</h4>
					
					
					
                       <div class="teams">                     
							<strong class="match-info">Match 19  <br>Time: 8:00pm IST (2:30pm GMT) <br>Date:19-3-16</strong>           
							<div class="team">                           
								<div class="tLogo16x30 SRH"></div>                           
								<strong>Barisal Bulls</strong>                           
								<div class="tLogo70x SRH"></div>                       
							</div>
							<div class="team">
								<div class="tLogo16x30 KXIP"></div>
								<div class="tLogo70x KXIP"></div>
								<strong>Sylhet Superstars</strong>
							</div>
							<strong class="match-info-mobile">Bongobondhu Stadium, Mirpur</strong>
						</div>       
               


			   </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item bootstrap wordpress">
                <div class="item-inner">
                    <img src="images/photos/thumb/ChvC.jpg" alt="">
                    <h4>Chittagong Vikings vs Comilla Victorians</h4>
					
					
					
                       <div class="teams">                     
							<strong class="match-info">Match 20  <br>Time: 8:00pm IST (2:30pm GMT) <br>Date:20-3-16</strong>           
							<div class="team">                           
								<div class="tLogo16x30 SRH"></div>                           
								<strong>Chittagong Vikings</strong>                           
								<div class="tLogo70x SRH"></div>                       
							</div>
							<div class="team">
								<div class="tLogo16x30 KXIP"></div>
								<div class="tLogo70x KXIP"></div>
								<strong>Comilla Victorians</strong>
							</div>
							<strong class="match-info-mobile">Bongobondhu Stadium, Mirpur</strong>
						</div>       
               


			   </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla wordpress apps">
                <div class="item-inner">
                    <img src="images/photos/thumb/RvB.jpg" alt="">
                    <h4>Rangpur Riders vs Barisal Bulls</h4>
					
					
					
                       <div class="teams">                     
							<strong class="match-info">Match 21  <br>Time: 8:00pm IST (2:30pm GMT) <br>Date:21-3-16</strong>           
							<div class="team">                           
								<div class="tLogo16x30 SRH"></div>                           
								<strong>Rangpur Riders</strong>                           
								<div class="tLogo70x SRH"></div>                       
							</div>
							<div class="team">
								<div class="tLogo16x30 KXIP"></div>
								<div class="tLogo70x KXIP"></div>
								<strong>Barisal Bulls</strong>
							</div>
							<strong class="match-info-mobile">Bongobondhu Stadium, Mirpur</strong>
						</div>       
               


			   </div>          
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla html">
                <div class="item-inner">
                    <img src="images/photos/thumb/SvCh.jpg" alt="">
                    <h4>Chittagong Vikings vs Sylhet Superstars</h4>
					
					
					
                       <div class="teams">                     
							<strong class="match-info">Match 22  <br>Time: 8:00pm IST (2:30pm GMT) <br>Date:22-3-16</strong>           
							<div class="team">                           
								<div class="tLogo16x30 SRH"></div>                           
								<strong>Chittagong Vikings</strong>                           
								<div class="tLogo70x SRH"></div>                       
							</div>
							<div class="team">
								<div class="tLogo16x30 KXIP"></div>
								<div class="tLogo70x KXIP"></div>
								<strong>Sylhet Superstars</strong>
							</div>
							<strong class="match-info-mobile">Bongobondhu Stadium, Mirpur</strong>
						</div>       
               


			   </div>       
            </li><!--/.portfolio-item-->
            <li class="portfolio-item wordpress html">
                <div class="item-inner">
                    <img src="images/photos/thumb/DvC.jpg" alt="">
                    <h4>Dhaka Dynamites vs Comilla Victorians</h4>
					
					
					
                       <div class="teams">                     
							<strong class="match-info">Match 23  <br>Time: 8:00pm IST (2:30pm GMT) <br>Date:23-3-16</strong>           
							<div class="team">                           
								<div class="tLogo16x30 SRH"></div>                           
								<strong>Dhaka Dynamites</strong>                           
								<div class="tLogo70x SRH"></div>                       
							</div>
							<div class="team">
								<div class="tLogo16x30 KXIP"></div>
								<div class="tLogo70x KXIP"></div>
								<strong>Comilla Victorians</strong>
							</div>
							<strong class="match-info-mobile">Bongobondhu Stadium, Mirpur</strong>
						</div>       
               


			   </div>           
            </li><!--/.portfolio-item-->
        </ul>
    </section><!--/#portfolio-->
	
	
<br><br><br><br><br><br><br><br><br><br><br><br>
 	
	
							<!--Footer-->
							
							
							
							
							

    <section id="bottom" >
        <div class="container">
            <div class="row">
				<div class="col-md-3 col-sm-6">
                     <h4>Quick links</h4>
                    <div>
                        <ul class="arrow">
                            
                            <li><a href="schedule.php">Schedule</a></li>
                           
                            <li><a href="blog.php">Blog</a></li>
                           
                            <li><a href="ticket.php">Ticket</a></li>
                            <li><a href="bpl16.php">News</a></li>
                            <li><a href="contact.php">Contact us</a></li>
                            
                        </ul>
                    </div>
                </div>
                
				<div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="gov.php">BPL Governing Council</a></li>
                            <li><a href="acp.php">Anti Corruption Policy</a></li>
                            <li><a href="adp.php">Anti Doping Policy</a></li>
                        
                            
                            <li><a href="privacy.php">Privacy Policy</a></li>
                            <li><a href="terms.php">Terms of Use</a></li>
                            <li><a href="copy.php">Copyright</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

               <!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Latest news</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="Bpl-4.php">BPL 4 Edition Will Be Held in November 2016</a></span>
                                <small class="muted">Posted 17 Aug 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="bpl16.php">BPL T20 2016 Opening Ceremony</a></span>
                                <small class="muted">Posted 13 Sep 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="dd9.php">Comilla Victorians Brand Ambassador 2015</a></span>
                                <small class="muted">Posted 11 Jul 2013</small>
                            </div>
                        </div>
                    </div>  
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Address</h4>
                    <address>
                        <strong style="color:black">BANGLADESH CRICKET BOARD</strong><br> <p style="color:black">Sher-e-Bangla National Cricket Stadium
Mirpur
Dhaka-1216
Bangladesh   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Email : info@bcb-cricket.com
                        <br>
                        <abbr title="Phone">P:</abbr>  + 880 2 803 1001-4</p>
                    </address>
                    
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

   <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 Mejbah-Shakhawat-Milon . All Rights Reserved.
					<p>Web: <a href="http://Mejbah-Uddin-Shameem.website2.me">http://Mejbah-Uddin-Shameem.website2.me</a></p>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="HOME.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="faq.php">Faq</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	
	 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	
</body>

</html>
