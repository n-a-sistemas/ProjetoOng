<?php
    include('conn.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $user = $_POST['user'];

    $senha = hash('sha256', $senha);
    $sql = "INSERT INTO usuarios(nome, email, senha, adm) VALUES ('$nome', '$email', '$senha', '$user')";
    $conn->query($sql);
    header('Location: ../Login/login.php');
?>