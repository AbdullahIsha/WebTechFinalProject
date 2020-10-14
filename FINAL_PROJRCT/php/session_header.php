<?php
	session_start();

	if(!isset($_SESSION['name'])){
		header('location: ../views/login.php?error=invalid_request');
	}
?>