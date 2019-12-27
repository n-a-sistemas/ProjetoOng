<?php

    session_start();

    include('conn.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT FROM  usuarios WHERE email = '$email'";
    
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        $linha = $resultado->fetch_assoc();
        if($linha['senha'] == hash('sha256', $password)){
            echo "Login efetuado com sucesso";
            $_SESSION ['login'] = true;
        }
        else{
            echo "Erro";
        }
    }else{
        echo "erro 2";
    }