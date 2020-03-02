<?php
    include('conn.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $user = $_POST['user'];

    $senha = hash('sha256', $senha);
<<<<<<< HEAD
    $sql = "INSERT INTO usuarios(nome, email, senha, acesso) VALUES ('$nome', '$email', '$senha', '$user')";
    if($conn->query($sql) == TRUE){
    header('Location: form.php');
    }else{
        echo $conn->error;
    }
=======
    $sql = "INSERT INTO usuarios(nome, email, senha, adm) VALUES ('$nome', '$email', '$senha', '$user')";
    $conn->query($sql);
    header('Location: ../Login/login.php');
>>>>>>> a5f368400deb512298ab3b019d6f64c092271c16
?>