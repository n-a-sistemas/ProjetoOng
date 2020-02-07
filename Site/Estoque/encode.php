<?php

    include("conn.php");

    $sql = "SELECT * FROM produtos";
    $resultado = $conn->query($sql);

    $produtos=array();
    if($resultado->num_rows > 0){
        while($linha=$resultado->fetch_assoc()){
            array_push($produtos, $linha);            
        }
        echo json_encode($produtos);
    }
?>