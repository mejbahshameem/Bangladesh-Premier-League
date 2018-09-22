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
 //$sub_name = $_POST["sbjn"];
 //$std_name = $_POST["stdn"];

//$class_id = $_POST["cn"];
 //$s_id = $_POST["sn"];
 
 $sub_name = mysqli_real_escape_string($link, $_POST['sbjn']);
 $std_name = mysqli_real_escape_string($link, $_POST['stdn']);
//echo ($mail);
 //$pw = mysqli_real_escape_string($link, $_GET['tn']);
 
 //echo "<br>".$sub_name."<br>";
 //echo $std_name."<br>";
 //echo "<br>".okk."<br>";


    $sql = "SELECT student_id FROM sis_student WHERE student_name = '$std_name'";
	$sql1 = "SELECT sub_id FROM sis_subject WHERE sub_name = '$sub_name'";
	
	$result = $link->query($sql);
	$result1 = $link->query($sql1);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$stdid =  $row["student_id"];
			//echo "id: " .$stdid."<br>";
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


 
    $sql = "INSERT INTO sis_studentsubject(student_id,sub_id) VALUES ('$stdid','$s_id');";
    if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// close connection
mysqli_close($link);
?>