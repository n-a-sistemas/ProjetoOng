<?php
    include('conn.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $user = $_POST['user'];

    $senha2 = hash('sha256', $senha2);
    $sql = "INSERT INTO usuarios(nome, email, senha, adm) VALUES ('$nome', '$email', '$senha', '$user')";
    $conn->query($sql);
    header('Location: ../Login/login.php');
?>