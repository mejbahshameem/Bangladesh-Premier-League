<!DOCTYPE html>
<html>
    <head>
    </head>
	<body>
</br> </br> 
<table style="width:100%" border="2">
  <tr>
    <th style="font-size:130%">Player ID</th>
    <th style="font-size:130%">Player Name</th>		
    <th style="font-size:130%">Jersey NO.</th>
	<th style="font-size:130%">Country</th>
	<th style="font-size:130%">Team</th>
	<th style="font-size:130%">Age</th>
	<th style="font-size:130%">Playing Role</th>
	<th style="font-size:130%">Matches</th>
	<th style="font-size:130%">Runs</th>
	<th style="font-size:130%">Wickets</th>
  </tr>
<?php
	require 'connect.php';
	$sql="SELECT * FROM players";
	$myData=mysql_query($sql,$con);
	while($data = mysql_fetch_array($myData)){
		echo "<tr>";
		echo '<td style="text-align:center;">' . $data['player_id'] . "</td>";
		echo '<td style="text-align:center;">' . $data['player_name'] . "</td>";
		echo '<td style="text-align:center;">' . $data['jersey_no'] . "</td>";	
	    echo '<td style="text-align:center;">' . $data['country'] . "</td>";
		echo '<td style="text-align:center;">' . $data['team'] . "</td>";		
		echo '<td style="text-align:center;">' . $data['age'] . "</td>";	
		echo '<td style="text-align:center;">' . $data['role'] . "</td>";
		echo '<td style="text-align:center;">' . $data['matches'] . "</td>";
		echo '<td style="text-align:center;">' . $data['runs'] . "</td>";	
		echo '<td style="text-align:center;">' . $data['wickets'] . "</td>";	
		echo "</tr>";
	}
	
	mysql_close($con);
?>
</table>
</br> </br>
<a href="ptable.html" >Back</a> <a>--</a>   <a href="admin.html">Home</a>
</body>
</html>