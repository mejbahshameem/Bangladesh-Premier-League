<?php
error_reporting(0);
//connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sis";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed". $conn->connect_error);
}

//$sql = "UPDATE sis_teacherSubject SET sub_id=0 WHERE sub_id=2 ";
$sql = "DELETE FROM sis_teacherSubject WHERE sub_id=5";
if(mysqli_query($conn, $sql)){
    echo "Record deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// close connection
mysqli_close($link);
?>