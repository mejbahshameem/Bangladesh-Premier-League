<!DOCTYPE html>
<html>
    <head>
    </head>
	<link rel="stylesheet" type="text/css" href="styl.css" />
	<body>
</br> </br> 
<table style="width:100px" border="1">
  <tr>
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
	$sql1="SELECT * FROM players";
	$myData1=mysql_query($sql1,$con);
	while($data1 = mysql_fetch_array($myData1)){
		echo "<form action=all.php method=post>";
		echo "<tr>";
		echo "<td>" . "<input type=text name=pname value='" . $data1['player_name'] . "' </td>";
		echo "<td>" . "<input type=text style=width:126px name=jsn value=" . $data1['jersey_no'] . " </td>";	
	    echo "<td>" . "<input type=text name=cty value='" . $data1['country'] . "' </td>";	
		echo "<td>" . "<input type=text name=team value='" . $data1['team'] . "' </td>";			
		echo "<td>" . "<input type=text style=width:126px name=ag value=" . $data1['age'] . " </td>";	
		echo "<td>" . "<input type=text name=rl value='" . $data1['role'] . "' </td>";
		echo "<td>" . "<input type=text style=width:126px name=mc value=" . $data1['matches'] . " </td>";
		echo "<td>" . "<input type=text style=width:126px name=rn value=" . $data1['runs'] . " </td>";	
		echo "<td>" . "<input type=text style=width:126px name=wc value=" . $data1['wickets'] . " </td>";
		echo "<td>" . "<input type=hidden name=hidden value='" . $data1['player_id'] . "' </td>";
		echo "<td>" . "<input type=submit name=update value=update" . " </td>";
		echo "</tr>";
		echo "</form>";
	};
	
	mysql_close($con);
?>
</table>
</br><br>
<div id="ne"> <a href="ptable.html" >Back</a> <a>--</a>   <a href="admin.html">Home</a></div>
</body>
</html>