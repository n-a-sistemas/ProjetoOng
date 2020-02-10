<?php

require 'mailer/PHPMailerAutoload.php';

$email = $_POST['email'];

$mail = new PHPMailer();
$mail ->isSMTP();
$mail ->Charset = 'UTF-8';
$mail ->Host = 'smtp.gmail.com';
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'tls';
$mail ->Username = ''; // colocar email
$mail ->Password = '';
$mail ->Port = '587';

$mail ->setFrom('');
//$mail ->addReplyTo('');
//$mail ->addAddress('');

 if(!$mail->send()){

    header('Location: ../login.php');
 }else{
    header('Location: ../login.php');
 }