<?php

include('conn.php');

//$id = $_POST['codigo'];
$id = $_POST['codigo'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s');

$sql = "INSERT INTO vendas (data, valor_total) VALUES ('$data', '$valor')";

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

$sql = "SELECT * FROM produtos WHERE id_produto = '".$id."'";

$resultado = $conn->query($sql);
$quantidadefinal = 0;
if($resultado->num_rows == 1){
    while($linha = $resultado->fetch_assoc()){
        $quantidadefinal = $linha['quantidade'];
    }
}

$quantidadefinal = $quantidadefinal - $quantidade;

$sql = "UPDATE produtos SET `quantidade` = '".$quantidadefinal."' WHERE id_produto = '".$id."'";

if($conn->query($sql) == TRUE){
    //header("Location: ../menu.php");
}else{
   echo $conn->error;
}

$conn->close();

header('Location: ../Estoque/form.php');