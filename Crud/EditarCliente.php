<?php

require_once '../conectaBD.php';

$produto = [];
$id = filter_input(INPUT_GET, 'id'); 

if ($id) {
    $sql = $conn->prepare("SELECT * FROM cliente WHERE idCliente = :id;");
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
    <form action="ActionCliente.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto['idCliente']; ?>">
        <label for="">
            Nome: <input type="text" name="nome" id="" value="<?=$produto['Nome']; ?> " >
        </label>
        <label for="">
            CPF: <input type="text" name="cpf" id="" value="<?=$produto['CPF']; ?> ">
        </label>
        <label for="">
            Telefone: <input type="text" name="tel" id="" value="<?=$produto['Telefone']; ?> ">
        </label>
        <label for="">
            E-mail: <input type="text" name="email" id="" value="<?=$produto['Email']; ?> ">
        </label>
        <label for="">
            Senha: <input type="text" name="senha" id="" value="<?=$produto['Senha']; ?> ">
        </label>
        <input type="submit" value="Atualizar">
    </form>
</div>