<?php
    require("../database/conn.php");
    $id = "";
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    $preco = "";
    if($id != ""){
        $sql = "SELECT * FROM produtos WHERE id_produto = $id";
        $resultado = $conn->query($sql);
        if($resultado->num_rows == 1){
            while($linha = $resultado->fetch_assoc()){
                $preco = $linha['valor_unitario'];
            }
        }
    }
    echo $preco;
?>