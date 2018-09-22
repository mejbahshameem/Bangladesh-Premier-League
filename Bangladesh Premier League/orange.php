<!DOCTYPE html>
<html>
    <head>
    </head>
	<link rel="stylesheet" type="text/css" href="or.css" />
	<body>
	<center><h1 style="color:orange"><b>BPL 2015 Orange Cap Contenders <b></h1></center>
	<center><img src="oc.jpg"/></center>
</br> </br> 
<table style="width:100%" border="1">
  <tr>	
	<th style="font-size:130%">Player Name</th>
	<th style="font-size:130%">Team Name</th>
	<th style="font-size:130%">Runs</th>
  </tr>
<?php
	require 'connect.php';
	$sql="SELECT player_name,team_name,runs FROM `batting_perfomance` order by(runs) DESC";
	$myData=mysql_query($sql,$con);
	while($data = mysql_fetch_array($myData)){
		echo "<tr>";
		
	    echo '<td style="text-align:center;">' . $data['player_name'] . "</td>";
		echo '<td style="text-align:center;">' . $data['team_name'] . "</td>";
		echo '<td style="text-align:center;">' . $data['runs'] . "</td>";			
		echo "</tr>";
	}
	
	mysql_close($con);
?>
</table>
</br> </br>
<a href="new.html" >Home</a> 
</body>
</html>