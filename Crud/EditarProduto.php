<?php

require_once '../conectaBD.php';

$produto = [];
$id = filter_input(INPUT_GET, 'id'); 

if ($id) {
    $sql = $conn->prepare("SELECT * FROM produtos where idProdutos = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();


    if ($sql->rowCount() > 0) {
        

        $produto = $sql->fetch(PDO::FETCH_ASSOC);

         
    }else{
        header("location: ../Consulta.php");
        exit();
    }



}else {
    header("location: ../Consulta.php");
}

?>


<div>
    <h2>Editar Produto</h2>
    <form action="ActionProduto.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto['idProdutos']; ?>">
        <label for="">
            Nome: <input type="text" name="nome" id="" value="<?=$produto['Nome']; ?> ">
        </label>
        <label for="">
            Quantidade: <input type="text" name="quantidade" id="" value="<?=$produto['Quantidade']; ?> ">
        </label>
        <label for="">
            Valor: <input type="text" name="valor" id="" value="<?=$produto['Valor']; ?> ">
        </label>
        <input type="submit" value="Atualizar">
    </form>
</div>