<?php

require_once '../conectaBD.php';

$produto = [];
$id = filter_input(INPUT_GET, 'id'); 

if ($id) {
    $sql = $conn->prepare("SELECT enfeites.idEnfeites,produtos.Nome,enfeites.Cor
    FROM enfeites
    INNER JOIN produtos ON produtos.idProdutos = enfeites.Produtos_idProdutos
    WHERE idEnfeites = :id;");
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
    <h2>Editar Alimento</h2>
    <form action="ActionEnfeite.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto['idEnfeites']; ?>">
        <label for="">
            Nome: <input type="text" name="nome" id="" value="<?=$produto['Nome']; ?> " readonly>
        </label>
        <label for="">
            Cor: <input type="text" name="cor" id="" value="<?=$produto['Cor']; ?> ">
        </label>
        <input type="submit" value="Atualizar">
    </form>
</div>