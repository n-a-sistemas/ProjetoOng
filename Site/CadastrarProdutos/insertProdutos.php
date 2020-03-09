<?php

include('../database/conn.php');

$diretorio = "imagens/";
$codigo = $_POST['codigo'];
$categoria = $_POST['categoria'];
$nome = $_POST['nome'];
$imagem = "";
if(isset($_FILES['imagemUpload'])){
    $imagem = $diretorio . basename($_FILES['imagemUpload']['name']);
}
$tipo = strtolower(pathinfo($imagem, PATHINFO_EXTENSION));
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$valor = str_replace('.','', $valor);
$valor = str_replace(',','.', $valor);

move_uploaded_file($_FILES['imagemUpload']['tmp_name'], $imagem);

if(empty($codigo) || empty($categoria) || empty($nome) || empty($valor)){
    header("Location: ../CadastrarProdutos");
}else{

    $sql = "SELECT * FROM produtos WHERE nome = '$nome'";
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        while ($linha = $resultado->fetch_assoc()){
            $result = $linha['nome'];
        }
        if ($result == $nome){
            header("Location: ../CadastrarProdutos");
            echo "Produto já cadastrado";
        }
    }
    else{
        $sql = "INSERT INTO produtos(codigo, categoria, nome, imagem, descricao, valor_unitario) VALUES ('$codigo', '$categoria', '$nome', '$imagem', '$descricao', '$valor')";
        if($conn->query($sql) ==TRUE){
            header("Location: ../Estoque");
        }else{
            echo $conn->error;
        }
    }
}