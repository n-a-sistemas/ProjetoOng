<?php

    session_start();

    include('../database/conn.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        $linha = $resultado->fetch_assoc();
        if($linha['senha'] == hash('sha256', $password)){
            $_SESSION ['login'] = true;
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['email'] = $email;
            $_SESSION['acesso'] = $linha['acesso'];
            if($linha['acesso'] == 0){
            header('Location: ../Estoque');
            }else{
                header('Location: ../RelatorioFinanceiro');
            }
        }
        else{
            //substituir por cancelamento
            
            header('Location: index.php');
            echo $conn->error;
        }
    }else{
        //substituir
        header('Location: index.php');
    }