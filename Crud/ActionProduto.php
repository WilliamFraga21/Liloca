<?php

require_once '../conectaBD.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$quantidade = filter_input(INPUT_POST, 'quantidade');
$valor = filter_input(INPUT_POST, 'valor');


if ($id && $nome && $quantidade && $valor) {
    $conn->exec("UPDATE produtos SET Nome = '$nome', Quantidade = '$quantidade', Valor = '$valor' WHERE idProdutos = '$id'");



    header("location: ../Consulta.php");
    exit();
}