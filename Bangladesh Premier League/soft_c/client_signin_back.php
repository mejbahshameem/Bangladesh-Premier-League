<?php session_start(); ?>
<?php require_once("include/db_connection.php"); ?>
<?php require_once("include/functions.php"); ?>

<?php

  if(isset($_GET["submit"])) {

    $t_email = $_GET["t_email"];
    $t_pass = $_GET["t_pass"];

    $result = get_user_pass($t_email, $t_pass);

    if($result) {

      $result_data = mysqli_fetch_assoc($result);

      if( $result_data['t_email'] == $t_email && $result_data['t_pass'] == $t_pass ) {
        $_SESSION['loggedin_teacher_id'] = $result_data['t_id'];
        $_SESSION['loggedin_teacher_name'] = $result_data['t_name'];
        redirect_to("index.php");
      } else {
        $_SESSION["message_in"] = "Somthing wrong! Please try again.";
        redirect_to("client_signin.php");
      }
    } else {
      $_SESSION["message_in"] = "Somthing wrong! Please try again.";
      redirect_to("client_signin.php");
    }
  } else {
      redirect_to("client_signin.php");
    }

?>


<?php if(isset($connection)) { db_connection_close($connection); } ?>
