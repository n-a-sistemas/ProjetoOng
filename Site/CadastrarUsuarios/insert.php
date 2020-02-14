<?php
    include('conn.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuarios(nome, email, senha, adm) VALUES ('$nome', '$email', '$senha')";
    $conn->query($sql);
?>