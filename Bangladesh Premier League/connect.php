<?php
$db='bangladesh_premiere_league';
$conn_error='could not connect.';
$con=@mysql_connect("localhost", "root","") or die ($conn_error);
@mysql_select_db($db) or die ($conn_error);
?>