<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "", "sis");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

//$first_name = mysqli_real_escape_string($link, $_POST['firstname']);
$first_name = $_POST['firstname'];
$last_name = mysqli_real_escape_string($link, $_POST['lastname']);
$uname = mysqli_real_escape_string($link, $_POST['username']);
$email= mysqli_real_escape_string($link, $_POST['email']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$mobile = mysqli_real_escape_string($link, $_POST['mobile']);
//$sex = mysqli_real_escape_string($link,$_POST['gender']); 
$sex = $_POST['gender']; 

//echo ($first_name);
// attempt insert query execution

$sql = "INSERT INTO users (first_name, last_name, username,email, password, mobile, gender) VALUES ('$first_name', '$last_name','$uname', '$email','$password','$mobile','$sex')";
if(mysqli_query($link, $sql)){
    //echo "Records added successfully.";
    include ('index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// close connection
mysqli_close($link);
?>