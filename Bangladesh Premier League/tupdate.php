<!DOCTYPE html>
<html>
    <head>
    </head>
	<link rel="stylesheet" type="text/css" href="styl.css" />
	<body>
</br> </br> 
<table style="width:100px" border="1">
  <tr>
    <th style="font-size:130%">Team ID</th>
    <th style="font-size:130%">Team Name</th>		
    <th style="font-size:130%">Sponsor</th>
	<th style="font-size:130%">Owner</th>
	<th style="font-size:130%">Worth</th>
  </tr>
  
<?php
	require 'connect.php';
	$sql1="SELECT * FROM teams";
	$myData1=mysql_query($sql1,$con);
	while($data1 = mysql_fetch_array($myData1)){
		echo "<form action=all.php method=post>";
		echo "<tr>";
		
		echo "<td>" . "<input type=text name=tid value='" . $data1['team_id'] . "' </td>";
		echo "<td>" . "<input type=text name=tname value='" . $data1['team_name'] . "' </td>";
		
		echo "<td>" . "<input type=text name=sp value='" . $data1['sponsors'] . "' </td>";
		echo "<td>" . "<input type=text name=ow value='" . $data1['owner'] . "' </td>";
		echo "<td>" . "<input type=text name=wo value='" . $data1['worth'] . "' </td>";
		
		echo "<td>" . "<input type=submit name=tupdate value=update" . " </td>";
		echo "</tr>";
		echo "</form>";
	};
	
	mysql_close($con);
?>
</table>
</br><br>
<div id="ne"> <a href="ttable.html" >Back</a> <a>--</a>   <a href="admin.html">Home</a></div>
</body>
</html>