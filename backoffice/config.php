<?php

	$link = mysqli_connect("localhost" , "bizinovl_francis" , "ry,%5n?9gbO5" , "bizinovl_darkside");

	mysqli_set_charset($link,"UTF8");

	if (!$link) {
		echo "Erro: Não foi possivel conectar ao servidor MySQL." . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}

	$sessao = 'sessao_login_darkside';

?>