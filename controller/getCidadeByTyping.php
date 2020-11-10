<?php header('Access-Control-Allow-Origin: *'); ?>

<?php

include("../model/cidades.php");
$cidades = new cidades();

if(empty($_GET['text'])){
        $text = "--";
} else{
        $text = $_GET['text'];
}

$data = $cidades->lista_cidades_by_typing($text);
$data = mb_convert_encoding($data, "UTF-8", "Latin1");

echo json_encode($data);

?>
