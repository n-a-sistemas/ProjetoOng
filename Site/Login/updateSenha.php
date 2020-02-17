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
    //header('Location: login.php');
}

//update tabela1 a set a.procest = (select b.email from tokem b where a.email = b.email


