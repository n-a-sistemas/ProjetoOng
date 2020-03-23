<?php

include('../../database/conn.php');
session_start();
$id_usuario = $_SESSION['id_usuario'];

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = hash('sha256', $senha);
$sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id_usuario='$id_usuario'";

if($conn->query($sql) != TRUE){
    $erro = $conn->error;
    echo $erro;
}
else{
    header('Location: ../../MeuPerfil/');
}
