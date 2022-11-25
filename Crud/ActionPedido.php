<?php

require_once '../conectaBD.php';

$id = filter_input(INPUT_POST, 'id');
$end = filter_input(INPUT_POST, 'end');
$tipo = filter_input(INPUT_POST, 'tipo');
$frete = filter_input(INPUT_POST, 'frete');
$valorpedido = filter_input(INPUT_POST, 'valorpedido');
$valorsinal = filter_input(INPUT_POST, 'valorsinal');
$valorpagar = filter_input(INPUT_POST, 'valorpagar');
$prazo = filter_input(INPUT_POST, 'prazo');
$datapedido = filter_input(INPUT_POST, 'datapedido');
$dataentrega = filter_input(INPUT_POST, 'dataentrega');




if ($id && $end && $tipo && $frete && $valorpedido && $valorsinal && $valorpagar && $prazo && $datapedido && $dataentrega) {
    $conn->exec("UPDATE pedido SET End_Do_Cliente_Entrega = '$end', Tipo_Da_Entrega = '$tipo', Frete = '$frete' ,Valor_Pedido = '$valorpedido' , Valor_Sinal = '$valorsinal' , Valor_A_Pagar = '$valorpagar' , Prozo_de_Entrega = '$prazo' , Data_Pedido = '$datapedido' ,  Data_Entrega = '$dataentrega' WHERE idPedido = '$id'");



    header("location: ../Consulta.php");
    exit();
}