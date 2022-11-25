<?php

require_once '../conectaBD.php';

$produto = [];
$id = filter_input(INPUT_GET, 'id'); 

if ($id) {
    $sql = $conn->prepare("SELECT bebidas.idBebidas,produtos.Nome,bebidas.Litros,bebidas.Marca,bebidas.Sabor
    FROM bebidas
    INNER JOIN produtos ON produtos.idProdutos = bebidas.Produtos_idProdutos;
    WHERE idBebidas = :id");
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
    <form action="ActionBebida.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto['idBebidas']; ?>">
        <label for="">
            Nome: <input type="text" name="nome" id="" value="<?=$produto['Nome']; ?> " readonly>
        </label>
        <label for="">
            Litros: <input type="text" name="litros" id="" value="<?=$produto['Litros']; ?> ">
        </label>
        <label for="">
            Marca: <input type="text" name="marca" id="" value="<?=$produto['Marca']; ?> ">
        </label>
        <label for="">
            Sabor: <input type="text" name="sabor" id="" value="<?=$produto['Sabor']; ?> ">
        </label>
        <input type="submit" value="Atualizar">
    </form>
</div>