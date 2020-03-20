<?php

include('../database/conn.php');

$diretorio = "imagens/";
$codigo = $_POST['codigo'];
$categoria = $_POST['categoria'];
$nome = $_POST['nome'];

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$valor = str_replace('.','', $valor);
$valor = str_replace(',','.', $valor);

if(empty($codigo) || empty($categoria) || empty($nome) || empty($valor)){
    header("Location: ../EditarProdutos");
}
else{
    $sql = "SELECT * FROM produtos WHERE codigo = '$codigo'";
    $resultado = $conn->query($sql);
    if($resultado->num_rows > 0){
        while ($linha = $resultado->fetch_assoc()){
            $id = $linha['id_produto'];
            $imagem_bd = $linha['imagem'];
        }
        $imagem = "";
        if($imagem_bd == ""){
            $imagem_bd = $diretorio . "camiseta azul.jpg";
        }
        if($_FILES['imagem']['name'] != ""){
            $imagem = $diretorio . basename($_FILES['imagem']['name']);
            if($imagem == $imagem_bd){
                $imagem = $imagem_bd;
            }
            else{
                $tipo = strtolower(pathinfo($imagem, PATHINFO_EXTENSION));
                move_uploaded_file($_FILES['imagem']['tmp_name'], "../CadastrarProdutos/".$imagem);
            }
        }
        else{
            $imagem = $imagem_bd;
        }
        $sql = "UPDATE produtos SET `codigo`='".$codigo."',`categoria`='".$categoria."',
        `nome`='".$nome."',`imagem`='".$imagem."',`descricao`='".$descricao."',
        `valor_unitario`='".$valor."'
        WHERE id_produto = '$id'";
        if($conn->query($sql) ==TRUE){
            header("Location: ../Estoque");
        }
        else{
            echo $conn->error;
        }
    }
}