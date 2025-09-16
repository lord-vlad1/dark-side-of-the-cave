<?php
	
	$id = $_REQUEST['id'];

	include_once "config.php";
	
	$sql = "DELETE FROM t_capturas WHERE id = '$id'";
	
	if (mysqli_query($link, $sql)) {
		header('Location:capturas-de-ecra.php');
		exit;
	}	else {
		echo "Erro";
	}
?>