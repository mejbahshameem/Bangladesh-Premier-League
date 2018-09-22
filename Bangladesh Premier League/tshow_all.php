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
    <th style="font-size:130%">Sponsor</th>
	<th style="font-size:130%">Owner</th>
	<th style="font-size:130%">Worth</th>
  </tr>
<?php
	require 'connect.php';
	$sql="SELECT * FROM teams";
	$myData=mysql_query($sql,$con);
	while($data = mysql_fetch_array($myData)){
		echo "<tr>";
		echo '<td style="text-align:center;">' . $data['team_id'] . "</td>";
		echo '<td style="text-align:center;">' . $data['team_name'] . "</td>";
		echo '<td style="text-align:center;">' . $data['sponsors'] . "</td>";
		echo '<td style="text-align:center;">' . $data['owner'] . "</td>";
		echo '<td style="text-align:center;">' . $data['worth'] . "</td>";
		echo "</tr>";
	}
	
	mysql_close($con);
?>
</table>
</br> </br>
<a href="ttable.html" >Back</a> <a>--</a>   <a href="admin.html">Home</a>
</body>
</html>