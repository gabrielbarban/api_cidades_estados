<?php

include("../model/cidades.php");
$cidades = new cidades();

if(empty($_GET['uf'])){
	$uf = "--";
} else{
	$uf = $_GET['uf'];
}

$data = $cidades->lista_cidades($uf);
echo json_encode($data);

?>