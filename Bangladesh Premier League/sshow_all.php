<!DOCTYPE html>
<html>
    <head>
    </head>
	<body>
</br> </br> 
<table style="width:100%" border="2">
  <tr>
    <th style="font-size:130%">Match ID</th>
    <th style="font-size:130%">Team 1 Name</th>		
    <th style="font-size:130%">Team 2 Name</th>
	<th style="font-size:130%">First Innings Score</th>
	<th style="font-size:130%">Second Innings Score</th>
	<th style="font-size:130%">Date</th>
	<th style="font-size:130%">Winner</th>
	<th style="font-size:130%">Result</th>
	<th style="font-size:130%">TOSS</th>
	<th style="font-size:130%">Decision</th>
  </tr>
<?php
	require 'connect.php';
	$sql="SELECT * FROM summary";
	$myData=mysql_query($sql,$con);
	while($data = mysql_fetch_array($myData)){
		echo "<tr>";
		echo '<td style="text-align:center;">' . $data['match_id'] . "</td>";
		echo '<td style="text-align:center;">' . $data['team1'] . "</td>";
		echo '<td style="text-align:center;">' . $data['team2'] . "</td>";
		echo '<td style="text-align:center;">' . $data['first_innings_score'] . "</td>";
		echo '<td style="text-align:center;">' . $data['first_innings_score'] . "</td>";
		echo '<td style="text-align:center;">' . $data['date'] . "</td>";
		echo '<td style="text-align:center;">' . $data['winner'] . "</td>";
		echo '<td style="text-align:center;">' . $data['result'] . "</td>";
		echo '<td style="text-align:center;">' . $data['toss_winner'] . "</td>";
		echo '<td style="text-align:center;">' . $data['decision'] . "</td>";
		echo "</tr>";
	}
	
	mysql_close($con);
?>
</table>
</br> </br>
<a href="index.php" >Main</a> 
</body>
</html>