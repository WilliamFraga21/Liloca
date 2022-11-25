<?php

require_once '../conectaBD.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$cpf = filter_input(INPUT_POST, 'cpf');
$tel = filter_input(INPUT_POST, 'tel');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');


if ($id && $nome && $cpf && $tel && $email && $senha) {
    $conn->exec("UPDATE cliente SET Nome = '$nome', CPF = '$cpf', Telefone = '$tel' , Email = '$email' , Senha = '$senha' WHERE idCliente = '$id'");



    header("location: ../Consulta.php");
    exit();
}