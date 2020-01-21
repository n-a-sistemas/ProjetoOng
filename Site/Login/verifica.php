<?php

    session_start();

    include('conn.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM  usuarios WHERE email = '$email'";
    
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        $linha = $resultado->fetch_assoc();
        if($linha['senha'] == hash('sha256', $password)){
            $_SESSION ['login'] = true;
            header('Location: ../Caixa/caixa.php');
        }
        else{
            //substituir
            echo "Usuário ou senha incorretos!";
        }
    }else{
        //substituir
        echo "Usuário ou senha incorretos!";
    }