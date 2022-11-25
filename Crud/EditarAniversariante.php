<?php

require_once '../conectaBD.php';

$produto = [];
$id = filter_input(INPUT_GET, 'id'); 

if ($id) {
    $sql = $conn->prepare("SELECT cliente.Nome AS CNome,aniversariante.Nome,aniversariante.Cores,aniversariante.Data_Festa,aniversariante.Idade,aniversariante.idAniversariante,aniversariante.Tema
    FROM aniversariante
    INNER JOIN cliente ON cliente.idCliente = aniversariante.Cliente_idCliente
    WHERE idAniversariante = :id;");
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
    <form action="ActionAniversariante.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto['idAniversariante']; ?>">
        <label for="">
            Nome: <input type="text" name="nome" id="" value="<?=$produto['Nome']; ?> " >
        </label>
        <label for="">
            Idade: <input type="text" name="idade" id="" value="<?=$produto['Idade']; ?> ">
        </label>
        <label for="">
            Tema: <input type="text" name="tema" id="" value="<?=$produto['Tema']; ?> ">
        </label>
        <label for="">
            Cores: <input type="text" name="cores" id="" value="<?=$produto['Cores']; ?> ">
        </label>
        <label for="">
            Data da Festa: <input type="text" name="datafesta" id="" value="<?=$produto['Data_Festa']; ?> ">
        </label>
        <label for="">
            Nome Cliente: <input type="text" name="sabor" id="" value="<?=$produto['CNome']; ?> "readonly>
        </label>
        <input type="submit" value="Atualizar">
    </form>
</div>