<!DOCTYPE html>
<html>
    <head>
    </head>
	<link rel="stylesheet" type="text/css" href="styl.css" />
	<body>
</br> </br> 
<table style="width:100px" border="1">
  <tr>
    <th style="font-size:130%">Team Name</th>
	<th style="font-size:130%">Player ID</th>		
	<th style="font-size:130%">Player Name</th>		
  
  </tr>
  
<?php
	require 'connect.php';
	$sql1="SELECT * FROM captain";
	$myData1=mysql_query($sql1,$con);
	while($data1 = mysql_fetch_array($myData1)){
		echo "<form action=all.php method=post>";
		echo "<tr>";
		
		echo "<td>" . "<input type=text name=tname value='" . $data1['team_name'] . "' </td>";
		echo "<td>" . "<input type=text name=p_id value='" . $data1['player_id'] . "' </td>";
		
		echo "<td>" . "<input type=text name=pname value='" . $data1['player_name'] . "' </td>";
		
		echo "<td>" . "<input type=hidden name=hidden value='" . $data1['player_id'] . "' </td>";
		echo "<td>" . "<input type=submit name=cupdate value=update" . " </td>";
		echo "</tr>";
		echo "</form>";
	};
	
	mysql_close($con);
?>
</table>
</br><br>
<div id="ne"> <a href="new.html">Home</a></div>
</body>
</html>