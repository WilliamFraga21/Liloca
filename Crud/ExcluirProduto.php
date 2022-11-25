<?php

require_once '../conectaBD.php';

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $conn->exec("DELETE FROM produtos WHERE idProdutos = $id");

    header("location: ../Consulta.php");
    exit();
}

