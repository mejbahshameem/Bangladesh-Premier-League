<?php
	require 'connect.php';
	$sql=SELECT MAX(runs) FROM `batting_perfomance` WHERE 1;
	$myData=mysql_query($sql,$con);
	while($data = mysql_fetch_array($myData)){
		 echo "<h4 style='color:red;'>".$data['runs']."</h4>";
		 echo 'hi';
	}
	
	mysql_close($con);
?>