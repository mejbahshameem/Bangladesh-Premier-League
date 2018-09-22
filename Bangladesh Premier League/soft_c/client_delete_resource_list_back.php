<?php session_start(); ?>
<?php require_once("include/db_connection.php"); ?>
<?php require_once("include/functions.php"); ?>

<?php

  if(isset($_SESSION['loggedin_teacher_id'])) {

    $r_id = $_GET["r_id"];

    $result = delete_resource($r_id);

    if($result) {
        redirect_to("index.php");
    } else {
        redirect_to("client_delete_resource_list.php");
    }

  } else {
      redirect_to("client_signin.php");
    }

?>


<?php if(isset($connection)) { db_connection_close($connection); } ?>
