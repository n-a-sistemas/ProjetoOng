<?php

include('../database/conn.php');

$diretorio = "imagens/";
$codigo = $_POST['codigo'];
$categoria = $_POST['categoria'];
$nome = $_POST['nome'];
$imagem = $diretorio . basename($_FILES['imagemUpload']['name']);
$tipo = strtolower(pathinfo($imagem, PATHINFO_EXTENSION));
$descricao = $_POST['descricao'];
$valor = $_POST['preco'];
number_format($valor,2, ',', '.');


move_uploaded_file($_FILES['imagemUpload']['tmp_name'], $imagem);

$sql = "SELECT * FROM produtos WHERE nome = '$nome'";

$resultado = $conn->query($sql);

if($resultado->num_rows > 0){
    //header("Location: ../CadastrarProdutos/index.php");
    echo "aaa";
}
else{
    $sql = "INSERT INTO produtos(codigo, categoria, nome, imagem, descricao, valor_unitario) VALUES ('$codigo', '$categoria', '$nome', '$imagem', '$descricao', '$valor')";

    if(empty($codigo) || empty($categoria) || empty($nome) || empty($valor)){
       // header("Location: ../CadastrarProdutos/index.php");
       echo "aa";
    }
    elseif ($conn->query($sql) == TRUE ) {
        header("Location: ../Estoque/index.php");
    }
    else{
        echo "Erro: " . $conn->error;
    }
}




