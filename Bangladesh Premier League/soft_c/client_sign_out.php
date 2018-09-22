<?php session_start(); ?>
<?php require_once("include/functions.php"); ?>
<?php

$_SESSION['loggedin_teacher_id'] = NULL;
redirect_to("index.php");

?>
