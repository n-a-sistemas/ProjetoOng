<?php
    include('../database/conn.php');

    $id = $_GET['id'];

    $sql="DELETE FROM produtos WHERE id_produto = $id";
    echo $sql;
    if($conn->query($sql) == TRUE){
        header('Location: ../Estoque');
    }
?>