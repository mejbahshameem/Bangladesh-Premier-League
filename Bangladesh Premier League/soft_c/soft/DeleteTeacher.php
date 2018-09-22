<?php

// connect to the database

//include('connect-db.php');

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
echo "okk";

// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
 //get id value
 $id = $_GET['id'];
    //echo $id; 
    
// delete the entry
    
    $sql = "DELETE FROM sis_teacher WHERE t_id= $id ";
    $result = "DELETE FROM sis_teachersubject WHERE t_id= $id ";
    
if(mysqli_query($link, $sql)){
    echo "Record deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
  if(mysqli_query($link, $result)){
    echo "Record deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}  
    
//$result = mysql_query("DELETE FROM sis_teachersubject WHERE t_id = $id ")
//or die(mysql_error());
// redirect back to the view page
header("Location: admin_delete_teachers.php");
}
else// if id isn't set, or isn't valid, redirect back to view page
{
    header("Location: admin_delete_teachers.php");
}
?>