	<?php
	
		$id = $_REQUEST['id'];

		include_once "config.php";
	
		$sql = "DELETE FROM t_caracteristicas WHERE id = '$id'";
	
		if (mysqli_query($link, $sql)) {
			header('Location:caracteristicas.php');
			exit;
		}	else {
			echo "Erro";
		}
	?>