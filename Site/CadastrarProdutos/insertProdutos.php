<?php

include('../database/conn.php');

$diretorio = "imagens/";
$codigo = $_POST['codigo'];
$categoria = $_POST['categoria'];
$nome = $_POST['nome'];
$imagem = $diretorio . basename($_FILES['imagem']['name']);
$tipo = strtolower(pathinfo($imagem, PATHINFO_EXTENSION));
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
number_format($valor,2, '.', ',');


move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);

if(empty($codigo) || empty($categoria) || empty($nome) || empty($valor)){
    header("Location: index.php");
}

$sql = "SELECT * FROM produtos WHERE nome = '$nome'";
$resultado = $conn->query($sql);

if($resultado->num_rows > 0){
    while ($linha = $resultado->fetch_assoc()){
        if ($linha['nome'] == $nome){
            header("Location: index.php");
            echo "Produto já cadastrado";
        }
    }
}
else{
    $sql = "INSERT INTO produtos(codigo, categoria, nome, imagem, descricao, valor_unitario) VALUES ('$codigo', '$categoria', '$nome', '$imagem', '$descricao', '$valor')";
    $conn->query($sql);
    $conn->error;
    if($conn->query($sql) ==TRUE){
        header("Location: ../Estoque/index.php");
    }else{
        echo $conn->error;
    }
    /*if(empty($codigo) || empty($categoria) || empty($nome) || empty($valor)){
        header("Location: ../CadastrarProdutos/index.php");
    }
    elseif ($conn->query($sql) == TRUE ) {
        header("Location: ../Estoque/index.php");
    }
    else{
        echo "Erro: " . $conn->error;
    }*/
}







