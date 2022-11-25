<?php

require_once '../conectaBD.php';

$produto = [];
$id = filter_input(INPUT_GET, 'id'); 

if ($id) {
    $sql = $conn->prepare("SELECT pedido.Data_Entrega, pedido.Data_Pedido, pedido.End_Do_Cliente_Entrega, pedido.Frete ,pedido.Prozo_de_Entrega, pedido.Tipo_Da_Entrega, pedido.Valor_A_Pagar, pedido.Valor_Pedido, pedido.Valor_Sinal ,pedido.idPedido,aniversariante.Nome as ANome
    from pedido
    inner join aniversariante on aniversariante.idAniversariante = pedido.Aniversariante_idAniversariante
    WHERE idPedido = :id;");
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
    <form action="ActionPedido.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto['idPedido']; ?>">
        <label for="">
            Endereço da Entrega: <input type="text" name="end" id="" value="<?=$produto['End_Do_Cliente_Entrega']; ?> ">
        </label>
        <label for="">
            Tipo da Entrega: <input type="text" name="tipo" id="" value="<?=$produto['Tipo_Da_Entrega']; ?> ">
        </label>
        <label for="">
            Frete: <input type="text" name="frete" id="" value="<?=$produto['Frete']; ?> ">
        </label>
        <label for="">
            Valor Pedido: <input type="text" name="valorpedido" id="" value="<?=$produto['Valor_Pedido']; ?> ">
        </label>
        <label for="">
            Valor Sinal: <input type="text" name="valorsinal" id="" value="<?=$produto['Valor_Sinal']; ?> ">
        </label>
        <label for="">
            Valor A Pagar: <input type="text" name="valorpagar" id="" value="<?=$produto['Valor_A_Pagar']; ?> ">
        </label>
        <label for="">
            Prazo de Entrega: <input type="text" name="prazo" id="" value="<?=$produto['Prozo_de_Entrega']; ?> ">
        </label>
        <label for="">
            Data do Pedido: <input type="text" name="datapedido" id="" value="<?=$produto['Data_Pedido']; ?> ">
        </label>
        <label for="">
            Data da Entrega: <input type="text" name="dataentrega" id="" value="<?=$produto['Data_Entrega']; ?> ">
        </label>
        <label for="">
            Nome: <input type="text" name="nome" id="" value="<?=$produto['ANome']; ?> " readonly>
        </label>

        <input type="submit" value="Atualizar">
    </form>
</div>