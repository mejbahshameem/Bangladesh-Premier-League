<!DOCTYPE html>
<html>
    <head>
    </head>
	<body>
</br> </br> 
<table style="width:100%" border="0">
  <tr>
    <th style="font-size:130%">Team ID</th>
    <th style="font-size:130%">Team Name</th>		
    
  </tr>
<?php
	require 'connect.php';
	$sql="SELECT * FROM live_score";
	$myData=mysql_query($sql,$con);
	while($data = mysql_fetch_array($myData)){
		echo "<tr>";
		echo '<td style="text-align:center;">' . $data['batting'] . "</td>";
		echo '<td style="text-align:center;">' . $data['bowling'] . "</td>";
		
		echo "</tr>";
	}
	
	mysql_close($con);
?>
</table>
</br> </br>

</body>
</html>