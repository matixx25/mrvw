<?php 
	session_start();
	if (!$_SESSION['auth']) {
		header("Location: ../Login/Login.php");
	} 
 ?>