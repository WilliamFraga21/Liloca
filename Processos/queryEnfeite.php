<?php

require_once '../conectaBD.php';

try {       //Cadastro Enfeites    

    $NomeEnfeite=$_POST['NomeEnfeite'];
    $QuantidadeEnfeite=$_POST['QuantidadeEnfeite'];
    $ValorEnfeite=$_POST['ValorEnfeite'];
    $CorEnfeite=$_POST['CorEnfeite'];

    $conn-> exec("insert into Produtos(Nome,Quantidade,Valor) values ('".$NomeEnfeite."','".$QuantidadeEnfeite."','".$ValorEnfeite."') ");
    $conn-> exec("insert into Enfeites(idProdutos,Cor) values ('".lastId()."','".$CorEnfeite."')");

    echo 'Cadastrado com sucesso!';

} catch (\Throwable $th) {
    //throw $th;
}
?>