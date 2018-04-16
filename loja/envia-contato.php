<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'repositoriofae@gmail.com';
$mail->Password = '4UM36JtS';

// quem esta enviando o email
$mail->setFrom("repositoriofae@gmail.com", "Teste envio de email");
$mail-> addAddress("repositoriofae@gmail.com");

// assunto
$mail -> Subject = "Email do contato da loja";

$mail -> msgHTML("<html>de:  {$nome}<br/>email: {$email}<br>Mensagem: {$mensagem}</html>");
$mail -> AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";


if($mail->send()) {
    $_SESSION["sucess"] = "mensagem enviada com sucesso";
    header("Location: index.php");
}else{
    $_SESSION["sucess"] = "Erro ao enviar a mensagem" + $mail->ErroInfo;
    header("Location: contato.php");
}
die();