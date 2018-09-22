<?php
error_reporting(0);
//connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sis";
$link = new mysqli($servername, $username, $password, $dbname);
if($link->connect_error){
    die("Connection failed". $link->connect_error);
}

//echo "connected to the website";
 $class_id = $_POST["cn"];
 $s_name = $_POST["sn"];
 $username = $_POST["tn"];
 
 //$name = mysqli_real_escape_string($link, $_GET['cn']);
 //$s_name = mysqli_real_escape_string($link, $_GET['sn']);
//echo ($s_name);
 //$username = mysqli_real_escape_string($link, $_GET['tn']);
 
// echo "<br>".$class_id."<br>";
 //echo $s_name."<br>";
// echo $username."<br>";
 //echo "<br>".okk."<br>";
 
	$sql = "SELECT t_id FROM sis_teacher WHERE t_name = '$username'";
	$sql1 = "SELECT sub_id FROM sis_subject WHERE sub_name = '$s_name'";
	
	$result = $link->query($sql);
	$result1 = $link->query($sql1);
	

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$tid =  $row["t_id"];
			//echo "id: " .$tid."<br>";
		}
	} else {
		echo "0 results";
	}
	
	
	if ($result1->num_rows > 0) {
		// output data of each row
		while($row = $result1->fetch_assoc()) {
			$s_id =  $row["sub_id"];
			//echo "id: " .$s_id."<br>";
		}
	} else {
		echo "0 results";
	}
 
 
 
    $sql = "INSERT INTO sis_teacherSubject(t_id,sub_id,class_id) VALUES ('$tid','$s_id','$class_id');";
    if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// close connection
mysqli_close($link);
?>