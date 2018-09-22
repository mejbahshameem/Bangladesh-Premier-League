<!DOCTYPE html>
<html>
    <head>
    </head>
	<body>
</br> </br> 
<table style="width:100%" border="0">
  <tr>
    <th style="font-size:130%">Dhaka Dynamites</th>
    <th style="font-size:130%">Barisal Bulls </th>		
    
  </tr>
<?php
	require 'connect.php';
	$sql="SELECT * FROM live_score where match_id=13";
	$myData=mysql_query($sql,$con);
	while($data = mysql_fetch_array($myData)){
		echo "<tr>";
		echo '<td style="text-align:center; font-size:180%; color:black">' . $data['team1bat'] . "</td>";
		echo '<td style="text-align:center;font-size:180%; color:red">' . $data['team2bat'] . "</td>";
		echo "</tr>";
		echo "<tr>";
		echo '<td style="text-align:center;font-size:180%; color:black">' . $data['team2bowl'] . "</td>";
		echo '<td style="text-align:center;font-size:180%; color:red">' . $data['team1bowl'] . "</td>";
		$rr=$data['team1bat']/$data['team2bowl'];
	    $pr=number_format((float)$rr, 2, '.', ''); ;
		$rr2=$data['team2bat']/$data['team1bowl'];
	    $pr2=number_format((float)$rr2, 2, '.', ''); ;
		
		echo "</tr>";
		echo "<tr>";
		echo "<td > RUN RATE:</td>";
		echo "<td >CURRENT RUN RATE:</td>";
		echo "</tr>";
		echo "<tr>";
		echo '<td style="text-align:LEFT;">' . $pr . "</td>";
		echo '<td style="text-align:LEFT;">' . $pr2 . "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td ></td>";
		echo "<td ></td>";
		echo "</tr>";
		$er= $data['team1bat']-$data['team2bat'];
		$er= $er+1;
		$ov= 20-$data['team1bowl'];
		$rrr=$er/$ov;
		$rrr2=number_format((float)$rrr, 2, '.', ''); ;
		echo "<tr >";
		echo "<td ></td>";
		echo "<td >REQUIRED RR:</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td ></td>";
		echo '<td style="text-align:LEFT;font-size:130%; color:red"">' . $rrr2 . "</td>";
		echo "</tr>";
		
	}
	
	
	mysql_close($con);
?>
</table>
</br> </br> 

<?php
	require 'connect.php';
	$sql="SELECT * FROM live_score where match_id=13";
	$myData=mysql_query($sql,$con);
	while($data = mysql_fetch_array($myData)){
		$a=" BB requires  ";
		$b=$a . $er;
		$c=" more runs to win ";
		$b=$b . $c;
		echo $b;
			
	}
?>
</br> </br>

</body>
</html>