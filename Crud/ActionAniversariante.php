<?php

require_once '../conectaBD.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$cores = filter_input(INPUT_POST, 'cores');
$tema = filter_input(INPUT_POST, 'tema');
$datafesta = filter_input(INPUT_POST, 'datafesta');


if ($id && $nome && $idade && $cores && $tema && $datafesta) {
    $conn->exec("UPDATE aniversariante SET Nome = '$nome', Idade = '$idade', Cores = '$cores' , Tema = '$tema' , Data_Festa = '$datafesta' WHERE idAniversariante = '$id'");



    header("location: ../Consulta.php");
    exit();
}