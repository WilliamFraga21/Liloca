<?php

require_once '../conectaBD.php';

$id = filter_input(INPUT_POST, 'id');
$medida = filter_input(INPUT_POST, 'medida');
$recheio = filter_input(INPUT_POST, 'recheio');
$sabor = filter_input(INPUT_POST, 'sabor');


if ($id && $medida && $recheio && $sabor) {
    $conn->exec("UPDATE alimentos SET Medida = '$medida', Sabor = '$sabor', Recheio = '$recheio' WHERE idAlimentos = '$id'");



    header("location: ../Consulta.php");
    exit();
}