<?php

include('../database/conn.php');

$datainicial = $_GET['datainicial'];
$datafinal = $_GET['datafinal'];

$sql = "SELECT a.id_venda, a.valor_total, a.data, b.id_produto, b.id_venda, b.quantidade, c.id_produto, c.nome, c.categoria 
FROM vendas a, item_vendas b, produtos c
WHERE a.id_venda = b.id_venda AND b.id_produto = c.id_produto AND a.data BETWEEN '$datainicial 00:00:00' AND '$datafinal 23:59:59'";

$resultado = $conn->query($sql);
$vendas=array();

if($resultado->num_rows > 0){
    while($linha=$resultado->fetch_assoc()){
        array_push($vendas, $linha);
    }
}


echo json_encode($vendas);