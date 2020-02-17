<?php
    include('conn.php');

    $nome = $_POST['nome'];
    $senha1 = $_POST['senha'];
    $senha2 = $_POST['confirmasenha'];
    $email1 = $_POST['email'];
    $email2 = $_POST['confirmaemail'];
    $user = $_POST['user'];

    if($email1 == $email2 && $senha1 == $senha2){
        $senha2 = hash('sha256', $senha2);
        $sql = "INSERT INTO usuarios(nome, email, senha, adm) VALUES ('$nome', '$email2', '$senha2', '$user')";
        $conn->query($sql);
        header('Location: ../Login/login.php');
    }else{
        header('Location: form.php');
    }
?>