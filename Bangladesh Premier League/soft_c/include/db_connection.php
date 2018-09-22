<?php

// Craete database connection

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "sis";

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Connection Varification

if(mysqli_connect_errno()) {
  die("Database Connection Failed".mysql_connect_error()."(".mysqli_connect_errno().")");
}

?>
