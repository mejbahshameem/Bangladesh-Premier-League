<?php
	require 'connect.php';
	if(isset($_POST['submit'])){
		$u=$_POST['uname'];
		$p=$_POST['pass'];
		$sql="SELECT * FROM admin WHERE ad_name='".$u."' AND password='".$p."' LIMIT 1";
		$res=mysql_query($sql);
		if(mysql_num_rows($res) == 1){
			header("location: http://localhost:81/index.php");
			exit();
		}
		else{
			echo ':p';
			exit();
		}
	
		mysql_close($con);
	}
?>
<html>
<head>
<title>Bangladesh Premiere League</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="styl.css" />
</head>
<body>
</br></br></br>
<form align="center" action="login.php" method="post">
            
             
           <p style="color:blue"> User Name: </P>   <p> <input type="text" name="uname"></br></p>
             <p style="color:blue"> Password: </p>    
			<p><input type="password" name="pass"></p>
            </br></br>
			<input style="color:blue" type="submit" name="submit" value="log in" />
         </form>
		 </br><br>
<div id="ne"> <a href="new.html">Home</a></div>
</body>
</html>