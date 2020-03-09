<?php
    include "../database/conn.php";
    $id= $_GET['id'];
    $sql="delete FROM categorias WHERE id = $id";
    if($conn->query($sql) == true){
        header("location: index.php");
    }
?>