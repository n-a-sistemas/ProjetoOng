<?php
    include('../database/conn.php');
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');

    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];
    for($i=0; $i < $valor; $i++){
        $valor = str_replace('.','',$valor);
        $valor = str_replace(',','.', $valor);
    }
    echo $quantidade;
    /*
    echo $id[1] . "<br>";
    echo $quantidade[1] . "<br>";
    echo $valor . "<br>";
    */
    /*
    $sql = "INSERT INTO vendas (data, valor_total) VALUES ('$data', '$valor')";

    if($conn->query($sql)){
        $idVendas = $conn->insert_id;
    }
    else {
        echo $conn->error;
    }

    $sql = "INSERT INTO item_vendas (id_produto, id_venda, quantidade) VALUES ('$id', '$idVendas', '$quantidade')";

    if($conn->query($sql) != true){
        echo $conn->error;
    }

    $sql = "SELECT * FROM produtos WHERE id_produto = '".$id."'";

    $resultado = $conn->query($sql);
    $quantidadefinal = 0;
    if($resultado->num_rows == 1){
        while($linha = $resultado->fetch_assoc()){
            $quantidadefinal = $linha['quantidade'];
        }
    }

    if($quantidade <= $quantidadefinal){
        $quantidadefinal = $quantidadefinal - $quantidade;
        $sql = "UPDATE produtos SET `quantidade` = '".$quantidadefinal."' WHERE id_produto = '".$id."'";
        if($conn->query($sql) == TRUE){
            //header("Location: ../menu.php");
        }
        else{
        echo $conn->error;
        }
        header('Location: ../Estoque');
    }
    else{
        header('Location: ../Caixa');
    }
    */
?>