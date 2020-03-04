<?php

    session_start();

    include('conn.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        $linha = $resultado->fetch_assoc();
        if($linha['senha'] == hash('sha256', $password)){
            $_SESSION ['login'] = true;
            if($linha['acesso'] == 0){
            header('Location: ../CadastrarProdutos/index.php');
            }else{
                header('Location: ../RelatorioFinanceiro/index.php');
            }
        }
        else{
            //substituir por cancelamento
            header('Location: index.php');
        }
    }else{
        //substituir
        header('Location: index.php');
    }