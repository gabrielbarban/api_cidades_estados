<?php header('Access-Control-Allow-Origin: *'); ?>

<?php

	include("../model/profissoes.php");
	$profissoes = new profissoes();
	$data = $profissoes->lista_profissoes();
	$data = mb_convert_encoding($data, "UTF-8", "Latin1");
	echo json_encode($data);

?>