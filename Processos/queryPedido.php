<?php

require_once '../conectaBD.php';

try {       //Cadastro Pedidos

    $DataEntregaPedido=$_POST['DataEntregaPedido'];
    $TipoEntregaPedido=$_POST['TipoEntregaPedido'];
    $PlazoEntregaPedido=$_POST['PrazoEntregaPedido'];
    $FretePedido=$_POST['FretePedido'];
    $EndEntregaPedido=$_POST['EndEntregaPedido'];
    $ValorPedido=$_POST['ValorPedido'];
    $ValorSinalPedido=$_POST['SinalPedido'];
    $ValorAPagarPedido=$_POST['ValorAPagarPedido'];
    $idAniversariante=$_POST['idAniversariante'];
    

    echo $idAniversariante.$DataEntregaPedido.$TipoEntregaPedido.$PlazoEntregaPedido.$FretePedido.$EndEntregaPedido.$ValorPedido.$ValorSinalPedido.$ValorAPagarPedido;
    
    $conn-> exec("insert into pedido(Data_Entrega,Tipo_Da_Entrega,Prozo_de_Entrega,Frete,End_Do_Cliente_Entrega,Valor_Pedido,Valor_Sinal,Valor_A_Pagar,Aniversariante_idAniversariante) values ('".$DataEntregaPedido."','".$TipoEntregaPedido."','".$PlazoEntregaPedido."','".$FretePedido."','".$EndEntregaPedido."','".$ValorPedido."','".$ValorSinalPedido."','".$ValorAPagarPedido."','".$idAniversariante."')");

    echo 'Cadastrado com sucesso!';

} catch (\Exception $e) {
    echo $e->getMessage();
}
?>