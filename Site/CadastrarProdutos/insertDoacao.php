<?php

include("conn.php");

$id = $_POST['produto'];
$quantidade = $_POST['quantidade'];

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s');

$sql = "INSERT INTO doacoes(data) VALUES ('$data')";

if($conn->query($sql)){
    $idDoacao = $conn->insert_id;
}else {
   echo $conn->error;
}

$sql = "INSERT INTO item_doacoes(id_doacao, id_produto, quantidade) VALUES ('$idDoacao', '$id', '$quantidade')";

if($conn->query($sql)){

}else {
   echo $conn->error;
}