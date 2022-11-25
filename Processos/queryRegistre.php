<?php

require_once '../conectaBD.php';

try {   //Cadastro Clientes
    $Nome=$_POST['Nome'];
    $CPF=$_POST['CPF'];
    $Email=$_POST['Email'];
    $Senha=$_POST['Senha'];
    $Telefone=$_POST['Tel'];

    $conn-> exec("insert into cliente(Nome,CPF,Telefone,Email,Senha) values ('".$Nome."','".$CPF."','".$Telefone."','".$Email."','".$Senha."') ");

    header("location: index.html");

} catch (\Throwable $th) {
    //throw $th;
}

?>