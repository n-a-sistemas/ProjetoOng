<?php

include 'conn.php';

$novaSenha = $_POST['novaSenha'];
$confirmaSenha = $_POST['confirmaSenha'];

if($novaSenha != $confirmaSenha){
    header('Location: recuperaSenha.php');
}else{
    $sql = "SELECT * FROM token WHERE token='$token' AND email'$email'";
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        $linha = $resultado->fetch_assoc();
        if($linha['token'] == $token & $linha['email'] == $email){
            $sql = "UPDATE usuario SET senha='$confirmaSenha'";
        }
    }
}