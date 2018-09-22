<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("sis", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from users where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: index.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>

<html>
<head>
  <title>Log-In</title>
    <?php include ('style1.php');?>	
    
    <style type="text/css">
         #dem{
             color: #993300;
            font-family: cursive;
            font-size: 20px;
            font-style: italic;
            //font-family: sans-serif;
        }
        h1{
            color: darkcyan;
            font-family: cursive;
        }
    </style>
    
</head>

<body>

  <div class="login-card">
      <strong><?=$try;?></strong>
      <h1>Log-In</h1><br>
      <form action="" method="post">
        <input type="text" name="username" placeholder="Username or Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" class="login login-submit" value="login">
      </form>

  <div class="login-help">
      <p style="color:red" >Not register yet?</p>
    <a href="sign_up.php"><p id="dem">Register</p></a>
  </div>
</div>

 

</body>

</html>
