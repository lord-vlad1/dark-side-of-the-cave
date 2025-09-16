<?php

$id = $_REQUEST['id'];

include_once "config.php";

$sql = "DELETE FROM t_slideshow WHERE id = '$id'";

$tmp = glob('../img/slider/'.$id.'.*');
$extensao = pathinfo($tmp[0], PATHINFO_EXTENSION);
unlink('../img/slider/'.$id.'.'.$extensao);

if (mysqli_query($link, $sql)) {
	header('Location:slideshow.php');
	exit;
}	else {
	echo "Erro";
}


?>