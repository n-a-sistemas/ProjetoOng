<?php

include('conn.php');

$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];

$sql = "SELECT * FROM vendas WHERE data BETWEEN $datainicial AND $datafinal";
$resultado = $conn->query($sql);

$produtos=array();

if($resultado->num_rows > 0){
    while($linha=$resultado->fetch_assoc()){
        array_push($produtos, $linha);
    }
    echo json_encode(urf8_string_array_encode($produtos));
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