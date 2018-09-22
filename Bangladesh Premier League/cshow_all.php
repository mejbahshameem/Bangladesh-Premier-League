<!DOCTYPE html>
<html>
    <head>
    </head>
	<body>
</br> </br> 
<table style="width:100%" border="2">
  <tr>
    <th style="font-size:130%">Team ID</th>
    <th style="font-size:130%">Team Name</th>		
    <th style="font-size:130%">Player ID</th>
	<th style="font-size:130%">Player Name</th>
  </tr>
<?php
	require 'connect.php';
	$sql="SELECT * FROM captain";
	$myData=mysql_query($sql,$con);
	while($data = mysql_fetch_array($myData)){
		echo "<tr>";
		echo '<td style="text-align:center;">' . $data['team_id'] . "</td>";
		echo '<td style="text-align:center;">' . $data['team_name'] . "</td>";
		echo '<td style="text-align:center;">' . $data['player_id'] . "</td>";	
	    echo '<td style="text-align:center;">' . $data['player_name'] . "</td>";		
		echo "</tr>";
	}
	
	mysql_close($con);
?>
</table>
</br> </br>
<a href="index.php" >Home</a> 
</body>
</html>