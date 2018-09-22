<?php session_start(); ?>
<?php require_once("include/db_connection.php"); ?>
<?php require_once("include/functions.php"); ?>

<?php

  if(isset($_GET["submit"])) {

    $r_type = $_GET["r_type"];
    $r_link = $_GET["r_link"];
    $s_id   = $_SESSION['subject_id'];

    $result = insert_resource($r_type, $r_link, $s_id);

    if($result) {
        redirect_to("index.php");
    } else {
        redirect_to("client_add_resource_entry.php");
    }

  } else {
      redirect_to("client_signin.php");
    }

?>


<?php if(isset($connection)) { db_connection_close($connection); } ?>
