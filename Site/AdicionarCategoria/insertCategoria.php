<?php

include('../database/conn.php');

if(isset($_POST['categoria'])){
    $categoria = $_POST['categoria'];
}
else{
    $categoria = "";
}

if($categoria != ""){
    $sql = "SELECT * FROM categorias WHERE categoria = '$categoria'";
    $resultado = $conn->query($sql);
    if($resultado->num_rows == 0){
        $sql = "INSERT INTO categorias (categoria) VALUES ('$categoria')";
        if($conn->query($sql) == TRUE){
            header("Location: index.php");
        }else{
            $conn->error;
        }
    }
    else{
        echo "<h1>Categoria já cadastrada!</h1>";
        echo "<a href='index.php'>Voltar para página anterior</a>";
    }
}
else{
    header("Location: index.php");
}