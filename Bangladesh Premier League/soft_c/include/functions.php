<?php

// For checking query

function check_qry($result_ref) {
  if(!$result_ref) {
    echo "<br>"."Database Query Failed!";
  }
}

// For database connection close

function db_connection_close($connection) {
  mysqli_close($connection);
}

// For getting username and password of teacher

function get_user_pass($t_email, $t_pass) {
  global $connection;
  $query  = "SELECT t_id, t_name, t_email, t_pass ";
  $query .= "FROM sis_teacher ";
  $query .= "WHERE t_email = '{$t_email}' AND t_pass = '{$t_pass}'";
  $result = mysqli_query($connection, $query);
  check_qry($result);
  return $result;
}

// For getting subjects for a specific class_id

function get_subject_of_class($class_id) {
  global $connection;
  $query  = "SELECT * ";
  $query .= "FROM sis_subject ";
  $query .= "WHERE c_id = '{$class_id}'";
  $result = mysqli_query($connection, $query);
  check_qry($result);
  return $result;
}

// Redirect to a page

function redirect_to($location) {
  header("Location: ".$location);
  exit;
}

// Insert Resource

function insert_resource($r_type, $r_link, $s_id) {
  global $connection;
  $query  = "INSERT INTO sis_resourse(r_type, r_link, s_id) ";
  $query .= "VALUES( '{$r_type}', '{$r_link}', {$s_id} )";
  $result = mysqli_query($connection, $query);
  check_qry($result);
  return $result;
}

// get all resources

function get_resource_of_subject($subject_id) {
  global $connection;
  $query  = "SELECT * ";
  $query .= "FROM sis_resourse ";
  $query .= "WHERE s_id = '{$subject_id}'";
  $result = mysqli_query($connection, $query);
  check_qry($result);
  return $result;
}

//delete resource

function delete_resource($r_id) {
  global $connection;
  $query  = "DELETE ";
  $query .= "FROM sis_resourse ";
  $query .= "WHERE r_id = {$r_id}";
  $result = mysqli_query($connection, $query);
  check_qry($result);
  return $result;
}












?>
