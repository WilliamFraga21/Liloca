<?php

require_once '../conectaBD.php';

try { //    //Cadastro Bebidas
        
    $NomeBebida=$_POST['NomeBebida'];
    $QuantidadeBebida=$_POST['QuantidadeBebida'];
    $ValorBebida=$_POST['ValorBebida'];
    $MarcaBebida=$_POST['MarcaBebida'];
    $LitrosBebida=$_POST['LitrosBebida'];
    $SaborBebida=$_POST['SaborBebida'];


    $conn-> exec("insert into Produtos(Nome,Quantidade,Valor) values ('".$NomeBebida."','".$QuantidadeBebida."','".$ValorBebida."') ");
    $conn-> exec("insert into Bebidas(idProdutos,Marca,Litros,Sabor) values ('".lastId()."','".$MarcaBebida."','".$LitrosBebida."','".$SaborBebida."')");
    
    echo 'Cadastrado com sucesso!';
    
    
} catch (\Throwable $th) {


    //throw $th;
}

?>