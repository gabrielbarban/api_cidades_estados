<?php

include("../model/estados.php");
$estados = new Estados();

$data = $estados->lista_estados();
echo json_encode($data);

?>