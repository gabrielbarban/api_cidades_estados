<?php header('Access-Control-Allow-Origin: *'); ?>

<?php

include("../model/cidades.php");
$cidades = new cidades();

if(empty($_GET['uf'])){
	$uf = "--";
} else{
	$uf = $_GET['uf'];
}

$data = $cidades->lista_cidades($uf);
$data = mb_convert_encoding($data, "UTF-8");

echo json_encode($data);

?>
