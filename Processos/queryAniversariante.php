<?php

require_once '../conectaBD.php';

try {   //Cadastro Aniversariante
        
    $NomeAniversariante=$_POST['NomeAniversariante'];
    $IdadeAniversariante=$_POST['IdadeAniversariante'];
    $TemaAniversariante=$_POST['TemaAniversariante'];
    $CorFestaAniversariante=$_POST['CorFestaAniversariante'];
    $DataFestaAniversariante=$_POST['DataFestaAniversariante'];
    $idCliente=$_POST['idCliente'];


    $conn-> exec("insert into aniversariante(Cliente_idCliente,Nome,Idade,Tema,Cores,Data_Festa) values ('".$idCliente."','".$NomeAniversariante."','".$IdadeAniversariante."','".$TemaAniversariante."','".$CorFestaAniversariante."','".$DataFestaAniversariante."')");


} catch (\Throwable $th) {
    //throw $th;
}

?>