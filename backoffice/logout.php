<?php
	
	include_once "config.php";

	session_start();

	unset($_SESSION[$site_session]);

	header('location:index.php');
	
?>