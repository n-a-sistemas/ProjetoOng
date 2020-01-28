<?php

include('conn.php');

$codido = $_POST['codigo'];
$categoria = $_POST['categoria'];
$nome = $_POST['nome'];

$sql = "INSERT INTO produtos(codigo, categoria, nome) VALUES ('$codido', '$categoria', '$nome')";

if($conn->query($sql) == TRUE){
    echo "Dado inserido com sucesso";
}
else{
    echo "Erro: " . $conn->error;
}