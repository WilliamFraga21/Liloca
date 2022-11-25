<?php

require_once '../conectaBD.php';

$id = filter_input(INPUT_POST, 'id');
$cor = filter_input(INPUT_POST, 'cor');




if ($id  && $cor) {
    $conn->exec("UPDATE enfeites SET Cor = '$cor' WHERE idEnfeites = '$id'");



    header("location: ../Consulta.php");
    exit();
}