<!DOCTYPE html>
<html>
    <head>
    </head>
	<link rel="stylesheet" type="text/css" href="or.css" />
	<body>
	<center><h1 style="color:purple"><b>BPL 2015 Purple Cap Contenders <b></h1></center>
	<center><img src="pp.jpg"/></center>
</br> </br> 
<table style="width:100%" border="1">
  <tr>	
	<th style="font-size:130%">Player Name</th>
	<th style="font-size:130%">Team Name</th>
	<th style="font-size:130%">Wickets</th>
  </tr>
<?php
	require 'connect.php';
	$sql="SELECT player_name,team_name,wicket FROM `bowling_perfomance` order by(wicket) DESC";
	$myData=mysql_query($sql,$con);
	while($data = mysql_fetch_array($myData)){
		echo "<tr>";
		
	    echo '<td style="text-align:center;">' . $data['player_name'] . "</td>";
		echo '<td style="text-align:center;">' . $data['team_name'] . "</td>";
		echo '<td style="text-align:center;">' . $data['wicket'] . "</td>";			
		echo "</tr>";
	}
	
	mysql_close($con);
?>
</table>
</br> </br>
<a href="new.html" >Home</a> 
</body>
</html>