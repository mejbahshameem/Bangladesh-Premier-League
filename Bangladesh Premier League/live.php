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
    <title>LIVE SCORE | BPL</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('new1.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds
</script>
	
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
			
			
			<!--Menu Bar-->
			
			
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
                   <li class="active"><a style="color: orange" href="live.php">LIVE Score</a></li>

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
<section id="recent-works">
        <div class="container">
            <div class="tg">
			<div clas="no">
			<div class="liveIcon" style="">Live</div>
				<h3>Match 13: Dhaka Dynamites vs Barisal Bulls</h3>
				<h5 style="color:black">Venue : Sher-E-Bnagla National Stadium, Mirpur, Dhaka<h5>                   
				<h5>Toss: DD won the toss & chose to field</h5><div>
				
                <div class="col-md-3">
                    

                    
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                   <div id="load_tweets" style="text-color:red"> </div> 
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->
	

    <section id="services" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-twitter icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a target="_blank" href="http://www.twitter.com">Twitter</a></h3>
                            <p>Twitter Mirror</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-facebook icon-md"></i>
							
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a target="_blank" href="https://www.facebook.com/BangladeshPremierLeagueT20.Official/">Facebook</a></h3>
                            <p>Facebook Follow</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-google-plus icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a target="_blank" href="https://plus.google.com/">Google Plus</a></h3>
                            <p>Keep updated via Google Plus</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#services-->

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Our Latest news</h3>
                    <p>Here is the Latest update of BPL.</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/bpl16.gif" alt="">
                                                <h5>
                                                    <a href="bpl16.php">BPL T20 2016 Opening Ceremony</a>
                                                </h5>
                                                
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/bb9.jpg" alt="">
                                                <h5>
                                                    <a href="bb9.php">Barisal vs Rangpur Riders match Preview</a>
                                                </h5>
                           
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/dd9.jpg" alt="">
                                                <h5>
                                                    <a href="dd9.php">Ananta Jalil Has Been Announced As The Brand Ambassador of Comilla Victorians</a>
                                                </h5>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/Bpl-4.jpg" alt="">
                                                <h5>
                                                    <a href="Bpl-4.php">Bpl 4 will be held in november 2016</a>
                                                </h5>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/ch9.jpg" alt="">
                                                <h5>
                                                    <a href="ch9.php">BPL Live Telecast in Channel 9</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/rr9.jpg" alt="">
                                                <h5>
                                                    <a href="rr9.php">Chittagong Vikings vs Rangpur Riders match Preview</a>
                                                </h5>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->
	
	
	<br><br><br>
	
	<div id="content-section-6"><div class=" kode-parallax-wrapper kode-background-color" id="kode-parallax-wrapper-5" style="padding-top: 50px; padding-bottom: 50px; ;background:#195d10"><div class="container"><div class="col-md-3 columns"><div class="simple-column">
	
		<div class="kd-counter">
			<img src="batting.png"/><br>
			<br>
			
<?php
	
	
	require 'connect.php';
	$sql="SELECT MAX(runs) FROM `batting_perfomance` WHERE 1";
	$myData=mysql_query($sql,$con);
	$data = mysql_fetch_array($myData);
		 
$a=($data[0]);
 $Color = "white";
echo '<div style="Color:'.$Color.'">'.$a.'</div>';	 
	
	
	mysql_close($con);
		 
	
	

?>
			<hr align="left" width="20%" style="color:white">
			<b><small style="color:white">Run Machine</small></b>
		</div>
</div></div><div class="col-md-3 columns"><div class="simple-column">
		<div class="kd-counter">
			<img src="bowling.png"/><br>
			<br>
			
			<?php
	
	
	require 'connect.php';
	$sql="SELECT MAX(wicket) FROM `bowling_perfomance` WHERE 1";
	$myData=mysql_query($sql,$con);
	$data = mysql_fetch_array($myData);
		 
$a=($data[0]);
 $Color = "white";
echo '<div style="Color:'.$Color.'">'.$a.'</div>';	 
	
	
	mysql_close($con);
		 
	
	

?>
			
			<hr align="left" width="20%" style="color:white">
			<b><small style="color:white">Howzat</small></b>
			
		</div>
</div></div><div class="col-md-3 columns"><div class="simple-column">
		
		<img src="best.png"/><br>
			<br>
			
			<?php
	
	
	require 'connect.php';
	$sql="SELECT MAX(highest_scores) FROM `batting_perfomance` WHERE 1";
	$myData=mysql_query($sql,$con);
	$data = mysql_fetch_array($myData);
		 
$a=($data[0]);
 $Color = "white";
echo '<div style="Color:'.$Color.'">'.$a.'</div>';	 
	
	
	mysql_close($con);
		 
	
	

?>
		
		<div class="kd-counter">
			<hr align="left" width="20%" style="color:white">
			<b><small style="color:white">Highest Individual Runs</small></b>
		</div>
</div></div><div class="col-md-3 columns"><div class="clear"></div><div class="kode-item kode-divider-item"><div class="kode-divider"></div></div><div class="simple-column">
	
	<img src="stump.png"/><br>
			<br>
			
			<?php
	
	
	require 'connect.php';
	$sql="SELECT MAX(best_figure) FROM `bowling_perfomance` WHERE 1";
	$myData=mysql_query($sql,$con);
	$data = mysql_fetch_array($myData);
		 
$a=($data[0]);
 $Color = "white";
echo '<div style="Color:'.$Color.'">'.$a.'</div>';	 
	
	
	mysql_close($con);
		 
	
	

?>
			
	
		<div class="kd-counter">
			<hr align="left" width="20%" style="color:white">
			<b><small style="color:white">Best Bowling Figure</small></b>
		</div>
</div></div><div class="clear"></div></div></div><div class="clear"></div></div>

<br><br><br><br>

    <section id="testimonial" class="alizarin">
       <div class="kode-player-tabs">
       <table  bordercolor="#181818"; class="kode-table" width="100%">
         <thead>
           <tr>
             <th class="text-center ng-binding" bgcolor="#195D10">#</th>
             <th class="text-center ng-binding" bgcolor="#195D10"> <FONT COLOR=white FACE="Geneva, Arial" SIZE=6>Team</FONT></th>
             <th class="text-center ng-binding" bgcolor="#195D10"><FONT align="centre" COLOR=white FACE="Geneva, Arial" SIZE=3>&nbsp;&nbspPts</FONT></th>
             <th class="text-center ng-binding" bgcolor="#195D10" ><FONT COLOR=white FACE="Geneva, Arial" SIZE=3>&nbsp;&nbspP</FONT></th>
             <th class="text-center ng-binding" bgcolor="#195D10"><FONT COLOR=white FACE="Geneva, Arial" SIZE=3>&nbsp;&nbspW</FONT></th>
             <th class="text-center ng-binding" bgcolor="#195D10"><FONT COLOR=white FACE="Geneva, Arial" SIZE=3>&nbsp;&nbspL</FONT></th>
             <th class="text-center ng-binding" bgcolor="#195D10"><FONT COLOR=white FACE="Geneva, Arial" SIZE=3>&nbsp;&nbspN/R</FONT></th>
             <th class="text-center ng-binding" bgcolor="#195D10"><FONT COLOR=white FACE="Geneva, Arial" SIZE=3>&nbsp;&nbspNRR</FONT></th>
           </tr>
         </thead>
         <tbody>
           <!-- ngRepeat: team in Teams | orderBy:'sort_index' --><tr style="" class="ng-scope" ng-repeat="team in Teams | orderBy:'sort_index'">
                      <td class="text-center">
                      	<span class="ng-binding">1</span>
                      </td>
                      <td class="text-center ng-binding"><img src="images/d.jpg" alt="" width="40px"> Dhaka Dynamites<!-- ngIf: !team.team_name --></td>
                       <td class="text-center ng-binding"bgcolor="404040">12</td>
                      <td class="text-center ng-binding">8</td>
                      <td class="text-center ng-binding"bgcolor="404040">6</td>
                       <td class="text-center ng-binding">2</td>
                      <td class="text-center ng-binding"bgcolor="404040">0</td>
                      <td class="text-center ng-binding">+0.573</td>
                    </tr><!-- end ngRepeat: team in Teams | orderBy:'sort_index' --><tr class="ng-scope" ng-repeat="team in Teams | orderBy:'sort_index'">
                      <td class="text-center">
                      	<span class="ng-binding">2</span>
                      </td>
                      <td class="text-center ng-binding"><img src="images/c.jpg" alt="" width="40px"> Comilla Victorians <!-- ngIf: !team.team_name --></td>
                      <td class="text-center ng-binding" bgcolor="404040">12</td>
                      <td class="text-center ng-binding">8</td>
                      <td class="text-center ng-binding"bgcolor="404040">6</td>
                       <td class="text-center ng-binding">2</td>
                      <td class="text-center ng-binding"bgcolor="404040">0</td>
                      <td class="text-center ng-binding">+0.216</td>
                    </tr><!-- end ngRepeat: team in Teams | orderBy:'sort_index' --><tr class="ng-scope" ng-repeat="team in Teams | orderBy:'sort_index'">
                      <td class="text-center">
                      	<span class="ng-binding">3</span>
                      </td>
                      <td class="text-center ng-binding"><img src="images/ch.jpg" alt="" width="40px"> Chittagong Vikings<!-- ngIf: !team.team_name --></td>
                      <td class="text-center ng-binding" bgcolor="404040">8</td>
                      <td class="text-center ng-binding">8</td>
                      <td class="text-center ng-binding"bgcolor="404040">4</td>
                       <td class="text-center ng-binding">4</td>
                      <td class="text-center ng-binding"bgcolor="404040">0</td>
                      <td class="text-center ng-binding">-0.282</td>
                    </tr><!-- end ngRepeat: team in Teams | orderBy:'sort_index' --><tr class="ng-scope" ng-repeat="team in Teams | orderBy:'sort_index'">
                      <td class="text-center">
                      	<span class="ng-binding">4</span>
                      </td>
                      <td class="text-center ng-binding"><img src="images/s.jpg" alt="" width="40px">  Sylhet Superstars&nbsp;&nbsp<!-- ngIf: !team.team_name --></td>
                      <td class="text-center ng-binding" bgcolor="404040">4</td>
                      <td class="text-center ng-binding">8</td>
                      <td class="text-center ng-binding"bgcolor="404040">2</td>
                       <td class="text-center ng-binding">6</td>
                      <td class="text-center ng-binding"bgcolor="404040">0</td>
                      <td class="text-center ng-binding">-0.036</td>
                    </tr><!-- end ngRepeat: team in Teams | orderBy:'sort_index' --><tr class="ng-scope" ng-repeat="team in Teams | orderBy:'sort_index'">
                      <td class="text-center">
                      	<span class="ng-binding">5</span>
                      </td>
                      <td class="text-center ng-binding"><img src="images/b.jpg" alt="" width="40px">Barisal Bulls&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp<!-- ngIf: !team.team_name --></td>
                      <td class="text-center ng-binding" bgcolor="404040">4</td>
                      <td class="text-center ng-binding">8</td>
                      <td class="text-center ng-binding" bgcolor="404040">2</td>
                       <td class="text-center ng-binding">6</td>
                      <td class="text-center ng-binding"bgcolor="404040">0</td>
                      <td class="text-center ng-binding">-0.536</td>
					  
                    </tr><!-- end ngRepeat: team in Teams | orderBy:'sort_index' --> <!-- ngRepeat: team in Teams | orderBy:'sort_index' --><tr style="" class="ng-scope" ng-repeat="team in Teams | orderBy:'sort_index'">
                      <td class="text-center">
                      	<span class="ng-binding">6</span>
                      </td>
                      <td class="text-center ng-binding"><img src="images/r.jpg" alt="" width="40px">    Rangpur Riders&nbsp;&nbsp&nbsp;&nbsp<!-- ngIf: !team.team_name --></td>
                       <td class="text-center ng-binding" bgcolor="404040">4</td>
                      <td class="text-center ng-binding">8</td>
                      <td class="text-center ng-binding"bgcolor="404040">2</td>
                       <td class="text-center ng-binding">6</td>
                      <td class="text-center ng-binding"bgcolor="404040">0</td>
                      <td class="text-center ng-binding">-0.573</td>
                    </tr>
         </tbody>
       </table>
     </div>
       
    </section><!--/#testimonial-->
	
	
	
	
	
	
	
	
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
