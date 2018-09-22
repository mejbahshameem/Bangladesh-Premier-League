<!DOCTYPE html>
<html>
    <head>
    </head>
<link rel="stylesheet" type="text/css" href="styl.css" />
	<body>

<?php
if(isset($_POST['createuser'])) {
    
    $name = $_POST['name'];
    $email= $_POST['email'];
	$password = $_POST['password'];
	$myteam= $_POST['myteam'];
	
    require 'connect.php';

    $sql="INSERT INTO `users`(`user_name`, `email`, `password`, `fav_team`) VALUES ('$name','$email','$password','myteam')";
	
	mysql_query($sql,$con);
	mysql_close($con);
	 header("Location: signupsuccess.php");
};
if(isset($_POST['loginuser'])) {
     
    
    $e= $_POST['username'];
	$p= $_POST['password'];
	
    require 'connect.php';

    $sql="SELECT * FROM users WHERE user_name='".$e."' AND password='".$p."' LIMIT 1";
	$res=mysql_query($sql);
	if(mysql_num_rows($res) == 1){
		
  
     session_start();
    $_SESSION['user'] = $_POST['username'];

	  header("Location: Home.php");
	}
	else{
		
	header("Location: wronguser.php");
	}
	mysql_query($sql,$con);
	mysql_close($con);

};
?>
</br> </br>
<a href="HOME.php" >Home</a> 
</body>
</html>