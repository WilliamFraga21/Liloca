<?php

require_once '../conectaBD.php';

$id = filter_input(INPUT_POST, 'id');
$litros = filter_input(INPUT_POST, 'litros');
$marca = filter_input(INPUT_POST, 'marca');
$sabor = filter_input(INPUT_POST, 'sabor');


if ($id && $litros && $marca && $sabor) {
    $conn->exec("UPDATE bebidas SET Litros = '$litros', Marca = '$marca', Sabor = '$sabor' WHERE idBebidas = '$id'");



    header("location: ../Consulta.php");
    exit();
}