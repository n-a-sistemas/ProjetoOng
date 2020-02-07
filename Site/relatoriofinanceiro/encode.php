<?php

include('conn.php');

$datainicial = $_GET['datainicial'];
$datafinal = $_GET['datafinal'];

$sql = "SELECT a.id_venda, a.valor, a.data, b.id_produto, b.id_venda, b.quantidade, c.id_produto, c.nome, c.categoria
FROM vendas a, item_vendas b, produtos c
WHERE a.id_venda = b.id_venda AND b.id_produto = c.id_produto AND a.data BETWEEN '$datainicial' AND '$datafinal'";

$resultado = $conn->query($sql);

$vendas=array();

if($resultado->num_rows > 0){
    while($linha=$resultado->fetch_assoc()){
        array_push($vendas, $linha);
    }
    echo json_encode($vendas);
}

function utf8_string_array_encode(&$array){
    $func = function(&$value, &$key){
        if(is_string($value)){
            $value = utf8_encode($value);
        }
        if(is_string($key)){
            $key = utf8_encode($key);
        }
        if(is_array($value)){
            utf8_string_array_encode($value);
        }
    };
    array_walk($array,$func);
    return $array;
}