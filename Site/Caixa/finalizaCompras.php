<?php
    include('../database/conn.php');
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');
    $erro = "";
    $autorizacao = true;
    $nome = "";
    $quantidade = "";
    $valor = "";
    if(isset($_POST['array_nome']) && isset($_POST['array_quantidade']) && isset($_POST['preco_final'])){
        $nome = $_POST['array_nome'];
        $quantidade = $_POST['array_quantidade'];
        $valor = $_POST['preco_final'];
    }
    if($nome != "" && $quantidade !="" && $valor != ""){
        $nome = explode(',', $nome);
        $quantidade = explode(',', $quantidade);

        $id = array();
        for($i=0;$i<count($nome);$i++){
            $sql = "SELECT * FROM produtos WHERE nome ='".$nome[$i]."'";
            $resultado = $conn->query($sql);
            if($resultado->num_rows == 1){
                while($linha = $resultado->fetch_assoc()){
                    $id[] = $linha['id_produto'];
                }
            }
        }
        for($i=0;$i<count($id);$i++){
            $sql = "SELECT * FROM produtos WHERE id_produto = '".$id[$i]."'";
            $resultado = $conn->query($sql);
            $quantidadefinal = 0;
            if($resultado->num_rows == 1){
                while($linha = $resultado->fetch_assoc()){
                    $quantidadefinal = $linha['quantidade'];
                }
            }
            if($quantidade[$i] > $quantidadefinal){
                $autorizacao = false;
            }
        }
        if($autorizacao){
            $sql = "INSERT INTO vendas (data, valor_total) VALUES ('$data', '$valor')";
            if($conn->query($sql)){
                $idVendas = $conn->insert_id;
            }
            else {
                $erro = $conn->error;
            }

            for($i=0;$i<count($id);$i++){
                $sql = "INSERT INTO item_vendas (id_produto, id_venda, quantidade) VALUES ('".$id[$i]."', '$idVendas', '".$quantidade[$i]."')";
                if($conn->query($sql) != true){
                    $erro = $conn->error;
                }
            }
            for($i=0;$i<count($id);$i++){
                $sql = "SELECT * FROM produtos WHERE id_produto = '".$id[$i]."'";
                $resultado = $conn->query($sql);
                $quantidadefinal = 0;
                if($resultado->num_rows == 1){
                    while($linha = $resultado->fetch_assoc()){
                        $quantidadefinal = $linha['quantidade'];
                    }
                }
                if($quantidade[$i] <= $quantidadefinal){
                    $quantidadefinal = $quantidadefinal - $quantidade[$i];
                    $sql = "UPDATE produtos SET `quantidade` = '".$quantidadefinal."' WHERE id_produto = '".$id[$i]."'";
                    if($conn->query($sql) != TRUE){
                        $erro = $conn->error;
                    }
                }
            }
        }
    }

    //print_r($nome);
    //print_r($id);
    //print_r($quantidade);
    //print_r($valor);
    
    header('Location: index.php');
?>