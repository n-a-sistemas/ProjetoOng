<?php

include('conn.php');
$quantidade = $_POST['quantidade'];

$a="SELECT * FROM produtos";
if($resultado->num_rows){
    while($linha=$resultado->fetch_assoc()){
        $linha['quantidade'];
    }

$valortotal = $quantidade * $valor;


$sql = "INSERT INTO item_vendas VALUES quantidade = ('$quantidade')";
$sql = "INSERT INTO vendas VALUES ('$valortotal', NOW())";

if($conn->query($sql) == TRUE){
    header('Location: ../CadastrarProdutos/tela-cadastro.html');
}

else{
    echo "Erro:" . $conn->error;
}
$conn->close();