<?php
    require("../database/conn.php");
    $id = "";
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    $tabela = 0;
    if(isset($_POST['tabela'])){
        $tabela = $_POST['tabela'];
    }
    $imagem = 0;
    if(isset($_POST['imagem'])){
        $imagem = $_POST['imagem'];
    }
    if($id != ""){
        if($tabela == 0 && $imagem == 0){
            $preco = "";
            $sql = "SELECT * FROM produtos WHERE id_produto = $id";
            $resultado = $conn->query($sql);
            if($resultado->num_rows == 1){
                while($linha = $resultado->fetch_assoc()){
                    $preco = $linha['valor_unitario'];
                }
            }
            echo $preco;
        }
        else if($tabela == 1 && $imagem == 0){
            $nome = "";
            $sql = "SELECT * FROM produtos WHERE id_produto = $id";
            $resultado = $conn->query($sql);
            if($resultado->num_rows == 1){
                while($linha = $resultado->fetch_assoc()){
                    $nome = $linha['nome'];
                }
            }
            echo $nome;
        }
        else if($tabela == 0 && $imagem == 1){
            $cx_imagem = "";
            $sql = "SELECT * FROM produtos WHERE id_produto = $id";
            $resultado = $conn->query($sql);
            if($resultado->num_rows == 1){
                while($linha = $resultado->fetch_assoc()){
                    $cx_imagem = $linha['imagem'];
                }
            }
            echo $cx_imagem;
        }
    }
?>