<?php

require 'mailer/PHPMailerAutoload.php';

include 'conn.php';

$email = $_POST['email'];

$token = bin2hex(random_bytes(50));

$sql = "INSERT INTO token (token, email) VALUES ('$token', '$email')";
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

$sql = "SELECT * FROM token WHERE token='$token'";
$resultado = $conn->query($sql);

if($resultado->num_rows > 0){
   $linha = $resultado->fetch_assoc();
   if($linha['token'] == $token){
      $assunto = "Redefinição de senha";
      $corpo = "Para redefinir sua senha, clique no link a seguir: http://localhost/xampp/ProjetoOng/Site/Login/recuperaSenha.php?token=" . $token;

      $mail ->setFrom('ti33senacsc@gmail.com');
      $mail ->addAddress($email);

      $mail ->isHTML(true);
      $mail ->Subject=$assunto;

      $mail ->Body=$corpo;
   }
}

   if(!$mail->send()){

    echo $mail->ErrorInfo;  
   }else{
    header('Location: ../login.php') ;
   }
