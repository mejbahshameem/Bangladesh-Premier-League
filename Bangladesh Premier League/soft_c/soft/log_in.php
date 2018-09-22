
<?php 
    error_reporting(0);
	// session start
    session_start();
    if($_SESSION['username'] != '')
        header('Location: index.php');
    // connect database
    $servername = $_SERVER['SERVER_NAME'];
    $conn = new mysqli($servername,'root','','sis');
    if($conn->connect_error){die("<h2>Connection Failed!!<h2>".$this->conn->connect_error);}
    $try = '';
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['pass'];
		
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($query);

        if(mysqli_num_rows($result)==1){
            $_SESSION['username']=$username;
            header("Location: index.php");
        }else{
            $try = 'Wrong Username or Password!!';
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
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="login" class="login login-submit" value="login">
      </form>

  <div class="login-help">
      <p style="color:red" >Not register yet?</p>
    <a href="sign_up.php"><p id="dem">Register</p></a>
  </div>
</div>

 

</body>

</html>