<!DOCTYPE html>
<html>
    <head>
    </head>
	<link rel="stylesheet" type="text/css" href="or.css" />
	<body>
	<center><h1 style="color:red"><b>BPL 2015 Results <b></h1></center>
</br> </br> 
<table style="width:100%" border="1">
  <tr>	
	<th style="font-size:130%">Team</th>
	<th style="font-size:130%">Team</th>
	<th style="font-size:130%">Results</th>
  </tr>
<?php
	require 'connect.php';
	$sql="SELECT team1, team2, result FROM summary WHERE 1";
	$myData=mysql_query($sql,$con);
	while($data = mysql_fetch_array($myData)){
		echo "<tr>";
		
	    echo '<td style="text-align:center;">' . $data['team1'] . "</td>";
		echo '<td style="text-align:center;">' . $data['team2'] . "</td>";
		echo '<td style="text-align:center;">' . $data['result'] . "</td>";			
		echo "</tr>";
	}
	
	mysql_close($con);
?>
</table>
</br> </br>
<a href="new.html" >Home</a> 
</body>