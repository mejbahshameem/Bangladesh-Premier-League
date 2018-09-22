<?php
session_start();

function signup_error_mgs() {
  if(isset($_SESSION["message"])) {
    return "<div class=\"alert alert-danger\" role=\"alert\"><strong>".$_SESSION["message"]."</div>";
  }
}

function signup_error_mgs_reset() {
  if(isset($_SESSION["message"])) {
    $_SESSION["message"] = NULL;
  }
}

function signup_success() {
  if(isset($_SESSION["message"])) {
    return "<div class=\"alert alert-success\" role=\"alert\"><strong>".$_SESSION["message"]."</div>";
  } else {
    return NULL;
  }
}

function signup_success_mgs_reset() {
  if(isset($_SESSION["message"])) {
    $_SESSION["message"] = NULL;
  }
}

function signin_error_mgs() {
  if(isset($_SESSION["message_in"])) {
    return "<div class=\"alert alert-danger\" role=\"alert\"><strong>".$_SESSION["message_in"]."</div>";
  }
}

function signin_error_mgs_reset() {
  if(isset($_SESSION["message_in"])) {
    $_SESSION["message_in"] = NULL;
  }
}


?>
