<?php

include('../conn.php');

$categoria = $_POST['categoria'];


$sql = "INSERT INTO categorias (categoria) VALUES ('$categoria')";

if($conn->query($sql) == TRUE){
    header("Location: index.php");
}else{
    $conn->error;
}