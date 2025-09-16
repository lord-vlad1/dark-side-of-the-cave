<?php

	if (!isset($_SESSION)) {
		session_start();
	}

	include_once "config.php";

	if (!isset($_SESSION[$sessao])) {
		echo'<script>window.location.href="index.php";</script>';
	}

?>

<head>
	
		<meta charset="utf-8">
		
		<title>Darkside-Backoffice</title>
		
		<link rel="stylesheet" href="css/reset.css">
	
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		
		<link rel="stylesheet" href="css/css.css">
		
</head>