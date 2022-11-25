<?php

require_once '../conectaBD.php';

$produto = [];
$id = filter_input(INPUT_GET, 'id'); 

if ($id) {
    $sql = $conn->prepare("SELECT produtos.Nome,alimentos.idAlimentos,alimentos.Medida,alimentos.Recheio,alimentos.Sabor
    FROM alimentos
    INNER JOIN produtos ON produtos.idProdutos = alimentos.Produtos_idProdutos
    WHERE idAlimentos = :id;");
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
    <form action="ActionAlimento.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto['idAlimentos']; ?>">
        <label for="">
            Nome: <input type="text" name="nome" id="" value="<?=$produto['Nome']; ?> " readonly>
        </label>
        <label for="">
            Medida: <input type="text" name="medida" id="" value="<?=$produto['Medida']; ?> ">
        </label>
        <label for="">
            Recheio: <input type="text" name="recheio" id="" value="<?=$produto['Recheio']; ?> ">
        </label>
        <label for="">
            Sabor: <input type="text" name="sabor" id="" value="<?=$produto['Sabor']; ?> ">
        </label>
        <input type="submit" value="Atualizar">
    </form>
</div>