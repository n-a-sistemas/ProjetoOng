<?php

include('conn.php');

$codido = $_POST['codigo'];
$categoria = $_POST['categoria'];
$nome = $_POST['nome'];
$foto = basename($_FILES['foto']['name']);

if(move_uploaded_file($_FILES['foto']['tmp_name'], $foto)){
    //header('Location: login.php');
}else{
    echo "Não foi possível salvar";
}

$sql = "INSERT INTO produtos(codigo, categoria, nome, imagem) VALUES ('$codido', '$categoria', '$nome', '$foto')";

if($conn->query($sql) == TRUE){
    echo "Dado inserido com sucesso";
}
else{
    echo "Erro: " . $conn->error;
}