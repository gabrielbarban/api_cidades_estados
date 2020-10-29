<?php header('Access-Control-Allow-Origin: *'); ?>

<?php

include("../model/estados.php");
$estados = new Estados();

$data = $estados->lista_estados();
$data = mb_convert_encoding($data, "UTF-8");

echo json_encode($data);

?>
