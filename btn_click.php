<?php

include_once 'backoffice/config.php';

$id=$_REQUEST['id'];

$query_slide=mysqli_query($link,"SELECT * FROM t_slideshow WHERE id='$id'");

$slide=mysqli_fetch_assoc($query_slide);

$clicks_novos=$slide['clicks'] + 1;

mysqli_query($link,"UPDATE t_slideshow SET clicks='$clicks_novos' WHERE id='$id'");

$btt_link = $slide['btt_link'];
header("location: $btt_link");

?>