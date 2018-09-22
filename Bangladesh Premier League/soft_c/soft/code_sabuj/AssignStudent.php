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
    //$student_id = $_POST["s_id"];
    //$sub_id = $_POST["sub_id"];
    

    $sql = "INSERT INTO sis_studentSubject(student_id,sub_id) VALUES ('5','4');";
    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
    }else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }


// close connection
mysqli_close($link);
?>