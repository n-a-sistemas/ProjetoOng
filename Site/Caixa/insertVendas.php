<?php

include('conn.php');

$id = $_POST['produto'];
$codigo = $_POST['codigo'];
$quantidade = $_POST['quantidade'];

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s');

$sql = "INSERT INTO vendas (data) VALUES ('$data')";

if($conn->query($sql)){
    $idVendas = $conn->insert_id;
}else {
   echo $conn->error;
}

$sql = "INSERT INTO item_vendas (id_produto, id_venda, quantidade) VALUES ('$id', '$idVendas', '$quantidade')";

if($conn->query($sql)){

}else{
   echo $conn->error;
}

$sql = "SELECT * FROM produtos WHERE codigo = '".$codigo."'";

$resultado = $conn->query($sql);

if($resultado->num_rows == 1){
    while($linha = $resultado->fetch_assoc()){
        $quantidadefinal = $linha['quantidade'];
    }
}

$quantidadefinal = $quantidadefinal - $quantidade;

$sql = "UPDATE produtos SET `quantidade` = '".$quantidadefinal."' WHERE codigo = '".$codigo."'";

if($conn->query($sql) == TRUE){
    header("Location: ../menu.php");
}else{
   echo $conn->error;
}

$conn->close();