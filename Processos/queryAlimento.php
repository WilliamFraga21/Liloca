<?php
    
require_once '../conectaBD.php';

try {       //Cadastro Alimentos
    

    $NomeAlimento=$_POST['NomeAlimento'];
    $QuantidadeAlimento=$_POST['QuantidadeAlimento'];
    $ValorAlimento=$_POST['ValorAlimento'];
    $MedidaAlimento=$_POST['MedidaAlimento'];
    $SaborAlimento=$_POST['SaborAlimento'];
    $RecheioAlimento=$_POST['RecheioAlimento'];

    $conn-> exec("Insert into Produtos(Nome,Quantidade,Valor) values ('".$NomeAlimento."','".$QuantidadeAlimento."','".$ValorAlimento."')");
    
    $conn-> exec("Insert into Alimentos(idProdutos,Medida,Sabor,Recheio) values ('".lastId()."','".$MedidaAlimento."','".$SaborAlimento."','".$RecheioAlimento."')" );
    
    echo 'Cadastrado com sucesso!';


} catch (\Throwable $th) {
    //throw $th;
}
?>