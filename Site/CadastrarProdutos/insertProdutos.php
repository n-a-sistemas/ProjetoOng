<?php

include('conn.php');

$diretorio = "uploads/";
$codigo = $_POST['codigo'];
$categoria = $_POST['categoria'];
$nome = $_POST['nome'];
$imagem = $diretorio . basename($_FILES['imagem']['name']);
$tipo = strtolower(pathinfo($imagem, PATHINFO_EXTENSION));
$descricao = $_POST['descricao'];

move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);

$sql = "SELECT * FROM produtos WHERE codigo = '$codigo'";

$resultado = $conn->query($sql);

if($resultado->num_rows > 0){
    header("Location: ../CadastrarProdutos/form.php");
}
else{
    $sql = "INSERT INTO produtos(codigo, categoria, nome, imagem, descricao) VALUES ('$codigo', '$categoria', '$nome', '$imagem', '$descricao')";

    if(empty($codigo) || empty($categoria) || empty($nome)){
        header("Location: ../CadastrarProdutos/form.php");
    }
    elseif ($conn->query($sql) == TRUE ) {
        header("Location: ../Estoque/form.php");
    }
    else{
        echo "Erro: " . $conn->error;
    }
}



