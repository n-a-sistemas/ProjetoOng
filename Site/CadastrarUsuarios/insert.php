<?php
    include('../database/conn.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $user = $_POST['user'];

    $senha = hash('sha256', $senha);
    $sql = "INSERT INTO usuarios(nome, email, senha, acesso) VALUES ('$nome', '$email', '$senha', '$user')";
    if($conn->query($sql) == TRUE){
    header('Location: form.php');
    }else{
        echo $conn->error;
    }
?>