<?php

require 'mailer/PHPMailerAutoload.php';

include '../../database/conn.php';

$email = $_POST['emailmodal'];

$token = bin2hex(random_bytes(32));

date_default_timezone_set('America/Sao_Paulo');
$datainicial = date('Y-m-d H:i:s');
$datafinal = date('Y-m-d H:i:s', strtotime('+30 minute', strtotime($datainicial)));

$sql = "INSERT INTO token (token, email, datainicial, datafinal) VALUES ('$token', '$email', '$datainicial', '$datafinal')";
$conn->query($sql);

$mail = new PHPMailer();
$mail ->isSMTP();
$mail ->Charset = 'UTF-8';
$mail ->Host = 'smtp.gmail.com';
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'tls';
$mail ->Username = 'ti33senacsc@gmail.com'; // colocar email
$mail ->Password = 'senac123';
$mail ->Port = '587';

$assunto = "Redefinir senha";
$corpo = "Para redefinir sua senha ação, clique no link a seguir: http://localhost/ProjetoOng/Site/Login/recuperaSenha.php?token=" . $token;

$mail ->setFrom('ti33senacsc@gmail.com');
$mail ->addAddress($email);

$mail ->isHTML(true);
$mail ->Subject=utf8_decode($assunto);

$mail ->Body=$corpo;

if(!$mail->send()){

   echo $mail->ErrorInfo;  
}else{
   header('Location: ../index.php');
}