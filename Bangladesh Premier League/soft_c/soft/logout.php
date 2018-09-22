<?php
	#start session
	session_start();
	
	#unset session username
	unset($_SESSION['usernme']);
	
	#destroy session
	session_destroy();
	
	
	# redirect to login page
	header("Location: log_in.php");

?>