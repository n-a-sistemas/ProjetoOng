<?php

include 'conn.php';

$email = $_GET['email'];
$novaSenha = $_POST['novaSenha'];
$confirmaSenha = $_POST['confirmaSenha'];


if($novaSenha != $confirmaSenha){
    header('Location: recuperaSenha.php');
}else{
    $confirmaSenha = hash('sha256', $confirmaSenha);
    $sql = "UPDATE usuarios SET senha = '$confirmaSenha' WHERE email = '$email'";
    $conn->query($sql);
    $del = "DELETE FROM token WHERE email = '$email'";
    $conn->query($del);
    header('Location: login.php');
}


