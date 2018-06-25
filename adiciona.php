<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

    $nome = $_GET["name"];
    $preco = $_GET["preco"];
    echo $nome ;
    echo $preco ;
    
?>