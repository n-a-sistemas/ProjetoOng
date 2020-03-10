<?php
    include("../database/conn.php");

    $pesquisar = $_GET['pesquisar'];
    $sql = "SELECT * FROM produtos WHERE '$pesquisar' LIKE '%nome%'";
    $resultado = $conn->query($sql);

    $produtos=array();
    if($resultado->num_rows > 0){
        while($linha=$resultado->fetch_assoc()){
            array_push($produtos, $linha);
        }
        echo json_encode($produtos);
    }
?>