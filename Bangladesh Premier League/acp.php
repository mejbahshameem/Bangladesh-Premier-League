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
    <title>Anti Corruption Policy | BPL</title>
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
                    <h1><b>Anti Corruption Policy<b></h1>
                    
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="Home.php">Home</a></li>
                        <li class="active">Anti Corruption Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->    

    <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-8">
                <ol>
				<h2><b>Anti Corruption Policy<b></h2>
<li>INTRODUCTION, SCOPE AND APPLICATION</li>
<li>OFFENCES UNDER THIS ANTI-CORRUPTION CODE</li>
<li>INTENTIONALLY LEFT BLANK</li>
<li>INVESTIGATIONS AND DISCIPLINARY PROCEEDINGS</li>
<li>SANCTIONS</li>
<li>PUBLIC DISCLOSURE AND CONFIDENTIALITY</li>
<li>RECOGNITION OF DECISIONS</li>
<li>LIMITATION PERIODS</li>
<li>AMENDMENT AND INTERPRETATION OF THIS ANTI-CORRUPTION CODE</li>
<li>DEFINITIONS</li>

</ol>
<br><br><br><br>
<h3>ARTICLE 1 - INTRODUCTION, SCOPE AND APPLICATION</h3>

<p>1.1	The BCCI has adopted this Anti-Corruption Code in recognition of the following fundamental sporting imperatives: <br>

1.1.1	All cricket matches are to be contested on a level playing-field, with the outcome to be determined solely by the respective merits of the competing teams and to remain uncertain until the cricket match is completed. This is the essential characteristic that gives sport its unique appeal.<br>

1.1.2	Public confidence in the authenticity and integrity of the sporting contest is therefore vital. If that confidence is undermined, then the very essence of cricket will be shaken to the core. It is the determination to protect that essence of cricket that has led the Board of Control for Cricket in India to adopt this Anti-Corruption Code. <br>

1.1.3	Advancing technology and increasing popularity have led to a substantial increase in the amount, and the sophistication, of betting on cricket matches. The development of new betting products, including spread-betting and betting exchanges, as well as internet and phone accounts that allow people to place a bet at any time and from any place, even after a cricket match has started, have all increased the potential for the development of corrupt betting practices. That, in turn, increases the risk that attempts will be made to involve participants in such practices.

Even where that risk is more theoretical than practical, its consequence is to create a perception that the integrity of the sport is under threat. <br>

1.1.4	Furthermore, the nature of this type of misconduct is such that it is carried out under cover and in secret, thereby creating significant challenges for the BCCI in the enforcement of rules of conduct. As a consequence, the BCCI needs to be empowered to seek information from and share information with competent authorities and other relevant third parties, and to require Participants to cooperate fully with all investigations and requests for information.<br>

1.1.5	The BCCI is committed to taking every step in its power to prevent corrupt betting practices undermining the integrity of the sport of cricket, including any efforts to influence improperly the outcome or any other aspect of any Match or Event. <br><br><br>

1.2	This Anti-Corruption Code is to be interpreted and applied by reference to the fundamental sporting imperatives described in Article 1.1. This includes but is not limited to cases where an issue arises that is not expressly addressed in this Anti-Corruption Code. Such interpretation and application shall take precedence over any strict legal or technical interpretations of this Anti-Corruption Code that may otherwise be proposed.<br><br><br>

1.3	All Participants are automatically bound by and required to comply with all the provisions of the Anti-Corruption Code. Accordingly, by their participation (in the case of a Player) or assistance in a Player's participation (in the case of a Player Support Personnel), or appointment to officiate (in the case of an Umpire or Match Referee) or appointment to support an Umpire or Match Referee (in the case of an Umpire Support Personnel) in a Domestic Match or International Match, such Participants shall deemed to have agreed:<br>

1.3.1	for the purposes of 4.3, to have consented to the collection, processing, disclosure and use of information relating to him/herself and his/her activities, including personal information relating to him/herself and his/her activities, to the extent expressly permitted hereinafter under the terms of this Anti-Corruption Code,;

1.3.2	that it is their personal responsibility to familiarise themselves with all of the requirements of this Anti-Corruption Code, including what conduct constitutes an offence under this Anti-Corruption Code, and to comply with those requirements;

1.3.3	to submit to the authority of the BCCI (including as delegated to any member of the ACU) to adopt, apply, monitor and enforce this Anti-Corruption Code; 

1.3.4	to submit to the exclusive jurisdiction of the BCCI Disciplinary Committee to hear and determine charges brought by the BCCI and/or related issues under this Anti-Corruption Code;<br>

1.3.5	not to bring any proceedings in any court or other forum that are inconsistent with the foregoing submissions to the jurisdiction of the BCCI Disciplinary Committee.<br><br><br>

1.4	Each Participant shall continue to be bound by and required to comply with this Anti-Corruption Code until he/she has not participated (in the case of a Player) or assisted in a Player's participation (in the case of a Player Support Personnel) or officiated (in the case of an Umpire or Match Referee) or been appointed to support an Umpire or Match Referee (in the case of an Umpire Support personnel) in a Domestic Match or International Match for a period of twelve (12) months. The BCCI shall continue to have jurisdiction over him/her under this Anti-Corruption Code thereafter in respect of matters taking place prior to that point.<br><br><br>

1.5	Without prejudice to Articles 1.3 and 1.4, the BCCI (through the ACU) shall be responsible for promoting Anti-Corruption Code awareness and education amongst Participants.<br><br><br>

1.6	This Anti-Corruption Code also requires Participants in International Matches and Participants in Domestic Matches played in the territory of any other National Cricket Federation or Member Cricket Association not to commit Corrupt Conduct in respect of Domestic Matches played in the BCCI's territory. By virtue of agreeing to be bound by the ICC Anti-Corruption Code or the anti-corruption rules of any other National Cricket Federation (as applicable), each such Participant is deemed also to have agreed to be bound by this Anti-Corruption Code and to submit to the jurisdiction of BCCI to investigate, and BCCI Disciplinary Committee convened under this Anti-Corruption Code to hear and determine, any allegation by the BCCI that he has committed Corrupt Conduct in respect of Domestic Matches played in the BCCI's territory.<br><br><br>

1.7	The conduct prohibited under this Anti-Corruption Code may also be a criminal offence and/or a breach of other applicable laws or regulations (including the ICC Anti-Corruption Code and/or anti-corruption rules of other National Cricket Federations). This Anti-Corruption Code is intended to supplement such laws and regulations with further rules of professional conduct and not intended, and should not be interpreted, construed or applied, to prejudice or undermine in any way the application of such laws and regulations. Participants must comply with all applicable laws and regulations at all times.<br><br><br>

1.8	Where a Participant’s alleged Corrupt Conduct would amount to a violation both of this Anti-Corruption Code and of the anti-corruption rules of any other National Cricket Federation and/or of the ICC Anti-Corruption Code:<br><br><br>

1.8.1	if the alleged Corrupt Conduct is in respect of one or more Domestic Matches played in the BCCI's territory, the BCCI will have the first right and responsibility to take action against the Participant, under this Anti-Corruption Code;<br>

1.8.2	if the alleged Corrupt Conduct is in respect of one or more Domestic Matches played in the other National Cricket Federation’s territory, the other National Cricket Federation(subject to provision contained in Article 1.8.5) will have the first right and responsibility to take action against the Participant, under the relevant anti-corruption rules of the National Cricket Federation, and the BCCI will not take action against the Participant for such Corrupt Conduct under this Anti-Corruption Code unless the other National Cricket Federation so agrees, or the other National Cricket Federation fails or refuses to take action itself within a reasonable time. It is clarified that the BCCI shall be entitled to recognise the final decision taken by the other National Cricket Federation in respect of any Participant and take suitable steps against such Participant under its own rules and regulations to implement the same;<br>

1.8.3	if the alleged Corrupt Conduct is in respect of one or more International Matches, the ICC will have the first right and responsibility to take action against the Participant, under the ICC Anti-Corruption Code, and the BCCI will not take action against the Participant under this Anti-Corruption Code for such Corrupt Conduct unless the ICC so agrees. It is clarified that in the event the ICC takes action against the Participant, under the ICC Anti-Corruption Code, the final decision of the ICC shall be binding on the BCCI and the BCCI shall take such steps under its own rules and regulations in accordance with the final decision of the ICC; and<br>

1.8.4	if the alleged Corrupt Conduct is in respect of one or more Domestic Matches played in the BCCI’s territory and in respect of one or more International Matches and/or one or more Domestic Matches played in another National Cricket Federation’s territory, the BCCI and the ICC and/or the other National Cricket Federation (as applicable) shall agree between them which of them shall take action against the Participant (and in the event of a failure to agree, the ICC will determine which of them shall take action) It is clarified that in the event the ICC determines that the other National Cricket Federation shall take action, the BCCI shall be entitled to recognise the final decision taken by the other National Cricket Federation in respect of any Participant and take suitable steps against such Participant under its own rules and regulations to implement the same. <br>

1.8.5	Notwithstanding anything contained in the Code if the alleged Corrupt Conduct is in respect of one or more Matches forming part of the IPL and CLT20 the BCCI will have the first right and responsibility to take action against the Participant, under this Anti-Corruption Code irrespective of where such Matches are played.<br><br><br>

1.9 Unless otherwise indicated, references in this Anti-Corruption Code to Articles and Appendices are to articles and appendices of this Anti-Corruption Code. Words in italicised text in this Anti-Corruption Code are defined terms and their respective definitions are set out in Appendix 1.
				
</p>
<br><br><br><br><br>				
				
				
				
				
				
				
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
