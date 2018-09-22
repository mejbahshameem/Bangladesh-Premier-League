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
    <title>About Us | BPL</title>
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
								<li class="active"><a href="aboutus.php">About Us</a></li>
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
                    <h1><b>About Us</b></h1>
                    
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="HOME.php">Home</a></li>
             
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title--> 

    <section id="privacy-policy" class="container">
        <h3>Introduction</h3>
        <p>The Bangladesh Premier League (BPL) is a professional Bangladeshi Twenty20 cricket league consisting of six teams, which was established by the Bangladesh Cricket Board (BCB) in 2012
		and is the highest professional cricket league in Bangladesh. The BPL's three-week league games runs from the last week of November to the second week of December and the championship game
		is held on the day before Victory Day. Each team plays ten league games in a double Round-robin format. Following the conclusion of the league matches, four teams advance to the semi-finals, 
		a single-elimination tournament culminating in the Championship game, played between the two winners of the semi-finals.<br>

		   The BPL was formed in 2012 by the BCB, with six original founding club franchises. After the first two seasons, all six franchises were suspended by the governing committee for violating 
		   the tournament regulations. Due to that, the third edition was indefinitely postponed, and was later held in 2015 with six new franchises. The number of teams will be increased to eight 
		   from the fourth edition of the tournament.[3] The BPL had the third highest average attendance among all cricket leagues with respect to the average crowd per match during the 2015 season.
		   In 2016, the BPL was revealed as the second most followed cricket league in the world, second to the Indian Premier League (IPL).[4] The brand valuation of BPL is estimated at around
		   $500 million.<br>

			As of 2015, Mushfiqur Rahim leads with most runs (819) while Kevon Cooper has the most wickets (49).[6] With two BPL championships, Dhaka Dynamites is the most successful team of the
			tournament. The current champions are the Comilla Victorians, who defeated the Barisal Bulls by three wickets in BPL III.</p>

        <p>&nbsp;</p>

        <h3>Foundation</h3>
        <p>After immense success of cricket leagues around the world, The Bangladesh Cricket Board announced it's ambitious plan to introduce Bangladesh Premier League, replacing National Cricket League (2010–12). On 18 January 2012, BCB entered 6-year, 350-crore deal with Game On Sports Group. The deal gave Game On Group exclusive management rights to the tournament. The league officially kicked off 9 February 2012 with six founding franchises from the largest cities of Bangladesh. During the franchise auction, thirteen companies took part in the bidding process, with six winning the rights of each clubs. The auction fetched 305-crores, with Chittagong Kings being the most expensive buy.

During the franchise auction, the legal rights of Chittagong Kings was bought by SQ Sports, consisting of a group of businessmen led by Dhaka Dyeing. Apart of them, Pearl Tradings and Digital Auto Care also participated in bid for Chittagong. Khulna based franchise fetched the second-highest price, and was bought by Orion Group while Sylhet was bought by Bangladesh's manufacturing giant Walton Hi-Tech Industries Limited. The biggest surprise at the auction was lack of interest from companies for Dhaka franchise. Only three companies placed a bid for the franchise, with all three entities offering no more than the base price.</p>

        <p>&nbsp;</p>

        <h3>Expansions and terminations</h3>
        <p>Rangpur Riders were added as the seventh team to join the league during the second season of the tournament. During December 2012, the Riders were sold to I-Sports Limited for US$15.50 million. The decision to introduce Rangpur was made after addition of Rangpur as the seventh administrative division of Bangladesh. In 2015, Comilla Victorians was introduced as the eighth team of the tournament, and sold to Nafisa Kamal's Legends Sporting Limited. Comilla Victorians are currently the most-expensive franchise in the league,r fetching a price of US$27.50 million. The Victorians made their first appearance during 2015 Bangladesh Premier League.

It has been proposed that the tournament would undergo expansion into more regional areas which lacks proper cricket infrastructure. As a part of the expansion implement, Many companies have shown interest in developing international sports arenas in the regions. The proposed teams also includes Noakhali, and Mymensingh. During the third season of the tournament, few firms were interested in buying Noakhali franchise, However, the Governing committee stalled the plan temporarily, until proper infrastructure is developed in the region.

In 2013, The owners of all six original teams were suspended, due to constant violation of the league regulations and delay in making payments to the players.The owners of Dhaka Gladiators were handed a lifetime suspension by the governing committee.[7]</p>

        <p>&nbsp;</p>
        <h3>Progression</h3>
        <p>The first edition of the league was officially launched on 9 February 2012, in a lavish opening ceremony at Sher-e-Bangla Cricket Stadium, home of Bangladesh Cricket. The players auction was held on 18 and 19 January 2012, where Pakistani all-rounder Shahid Afridi received the highest bid of US$700,000, closely followed by Caribbean hard-hitter Chris Gayle. Six icon players were signed for US$210,000 each. The inaugural game was contested between Sylhet Royals and Barisal Burners, which the burners convincingly won by reaching the target of 165 in only 13 overs after Chris Gayle's blazing innings of 101* in 44 balls. The first semi-final was played between Duronto Rajshahi and Barisal Burners. Winning the match by 8 wickers, Burners were the first team to reach the tournament final. The second semi-final was held between Dhaka Gladiators and Khulna Royal Bengals, a close contest was won by the Gladiators by a margin of 9 runs. The Championship game was between Dhaka Gladiators and Barisal Burners. Dhaka Gladiators emerged as the champions of the first edition after beating the Burners by 8 wickets. All matches were held at Sher-e-Bangla National Cricket Stadium and Zohur Ahmed Chowdhury Stadium.

The second season of the tournament began on 18 January 2013, with the opening ceremony taking place on 17 January, while the player auction player's auction took place on 20 December 2012.[10] Dhaka Gladiators again emerged as champions beating Chittagong Kings in the final by 43 runs. Sher-e-Bangla Cricket Stadium in Dhaka hosted most matches while the MA Aziz Stadium replaced the Zohur Ahmed Chowdhury Stadium in Chittagong and Sheikh Abu Naser Stadium in Khulna hosted matches of the tournament for the time in 2013. Unlike the first season, there were no icon players and the players taking part in the player's auction were divided into four categories, as opposed to the two categories in the first season.

Owing to technical issues, Bangladesh Premier League was not played during 2014. However it returned in 2015 for the third season which began on 22 November 2015 and featured six teams and a tournament format with a double round robin group stage, qualifier-eliminator type semi-finals and a final. The third edition of the tournament will feature the new franchises as all of the franchises from the 2012 and 2013 seasons were canceled. The new franchises are Barisal Bulls, Chittagong Vikings, Comilla Victorians, Dhaka Dynamites, Rangpur Riders and Sylhet Super Stars. The opening ceremony launched at 20 November 2015 at Sher-e-Bangla National Cricket Stadium and the tournament kicked off at 22 November 2015. The final will be played on 15 December . BRB Cables Limited was awarded with the title sponsorship and stadium rights for the third season.</p>

        <p>&nbsp;</p>
        <h3>Corporate Structure</h3>
        <p>At a corporate level, the Bangladesh Premier League considers itself a association made up of and financed by it's member teams. Each individual team is subject to tax because they make a profit. The tax is also applied to the participating players, as they are subjected to pay income tax based on their salary. Every dollar of income generated through television rights, licensing agreements, sponsorship, ticket sales and other means is earned and shared between the Bangladesh Cricket Board and the participating clubs is taxable.
			
		The league has three defined officers, the President, secretary and and Chief of treasurer. Being the parent organization of the league, Bangladesh Cricket Board board members elects and appoints the commissioner of the league, while the president of Cricket board serves as the president of the league committee. The secretary appoints the treasurer and has broad authority in disputes between clubs, players, coaches, and employees. He is the "Chief executive officer". of the BPL and also has authority in hiring league employees, negotiating contracts, disciplining individuals that own part or all of an BPL team, clubs, or employed individuals of an BPL club if they have violated the regulations of league by laws or committed "conduct detrimental to the welfare of the League or professional Cricket".</p>
        <p>&nbsp;</p>
		
		<p>&nbsp;</p>
		<h3>League organization</h3>
		<p>The Bangladesh Premier League consists of six clubs divided into six administrative divisions of the country. During the regular season, each team is allowed a maximum of 18 players in its roster, which includes eight overseas players; only eleven players, including four overseas players are eligible to play on game days. Each BPL club is granted a franchise, the league authorization for the team to operate in its home city. Each member has the exclusive right to host cricket games inside its home territory and the rights to advertise, promote and host events in it's city.

The Comilla Victorians are the most valuable BPL franchise with value approximately at US$27.50 million. The auction for the current franchises were held in 2015, in which thirteen interested companies took part. The valuation of the six franchises are approximately US$135 million, which is 345% higher than the six previous franchises.

In 2016, Two Existing inactive franchises from Khulna and Rajshahi will be auctioned, and the clubs will join the league during the 2016 season of the tournament. According to numerous media outlets, Mango Entertainment Group is the front-runner for the Rajshahi based franchise. According to the league committee, the company also attempted to buy the franchise during the 2015 season, however was turned down as committee wanted to go ahead with six teams.[8] The bid will be fierce as several billion-dollar corporations have also shown interest which includes Prime Bank Limited, Summit Group, Asian Group of Industries, and Hamim Group.[9]</p>
		<p>&nbsp;</p>
    </section><!--/#privacy-policy-->

   	
	
	
	
	
	
	
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
