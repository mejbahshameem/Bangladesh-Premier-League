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

echo "connected to the website";
    //$teacher_id = $_POST["t_id"];
    //$subject_id = $_POST["sub_id"];
 
    $sql = "INSERT INTO sis_teacherSubject(t_id,sub_id,class_id) VALUES ('3','5','8');";
    if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// close connection
mysqli_close($link);
?>