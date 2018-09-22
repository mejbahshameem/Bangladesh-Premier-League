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
    <title>Anti Doping Policy | BPL</title>
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
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">GALLERY <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="photo.php">Photo</a></li>
                            <li><a href="video.php">Video</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="schedule.php">SCHEDULE</a></li>
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
                    <h1><b>Anti Doping Policy<b></h1>
                    
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="Home.php">Home</a></li>
                        <li class="active">Anti Doping Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->    

    <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-8">
                <ol>
				<h2><b>Anti Doping Policy<b></h2>
<li>SCOPE AND APPLICATION</li>
<li>ANTI-DOPING RULE VIOLATIONS</li>
<li>PROOF OF DOPING</li>
<li>THE PROHIBITED LIST</li>
<li>TESTING</li>
<li>ANALYSIS OF SAMPLES</li>
<li>RESULTS MANAGEMENT</li>
<li>RIGHT TO A FAIR HEARING</li>
<li>AUTOMATIC DISQUALIFICATION OF INDIVIDUAL RESULTS</li>
<li>SANCTIONS ON INDIVIDUALS</li>
<li>CONSEQUENCES FOR TEAMS</li>
<li>INTENTIONALLY LEFT BLANK</li>
<li>APPEALS</li>
<li>PUBLIC DISCLOSURE AND CONFIDENTIALITY</li>
<li>RECOGNITION OF DECISIONS</li>
<li>STATUTE OF LIMITATIONS</li>
<li>STATISTICAL REPORTING</li>
<li>AMENDMENT AND INTERPRETATION OF THE RULES</li>
<li>APPENDIX 1 - DEFINITIONS</li>
<li>APPENDIX 2 - THE PROHIBITED LIST</li>
<li>APPENDIX 3: SUMMARY OF MAJOR MODIFICATIONS AND EXPLANATORY NOTES</li>
<li>APPENDIX 4 – THE 2016 MONITORING PROGRAM</li>
<li>APPENDIX 5 – THE CRICKET TESTING PROTOCOLS</li>

</ol>
<br><br><br><br>
<h3>THE BOARD OF CONTROL FOR CRICKET IN INDIA'S ANTI-DOPING RULES</h3>
<br>
<h4>INTRODUCTION</h4>

<p>The Board of Control for Cricket in India (the “BCCI”) has adopted these anti-doping rules (the “Rules”) to impose clear prohibitions and controls as part of the BCCI’s continuing effort to: (a) maintain the integrity of the sport of cricket in India; (b) to protect the rights and health of all participants in the sport of cricket in India; and (c) to keep Indian cricket free from doping. </p>			
<br>
<p>Unless otherwise indicated, references to Articles and Appendices are to articles and appendices of the Rules. Words in italicised text in the Rules are defined terms. Their definitions are set out in Appendix 1. </p>
	<br><br><br><br><br><br>			
				
				
				
				
				
            </div><!--/.col-sm-8-->
            
        </div>
    </section><!--/#contact-page-->

 	
	
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
