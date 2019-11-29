<?php   
function envia($nome, $informacao_adicional){

// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
  include "PHPMailer-master/PHPMailerAutoload.php"; 
// Inicia a classe PHPMailer 
  $mail = new PHPMailer(); 
// Método de envio 
  $mail->IsSMTP();
// Enviar por SMTP 
  $mail->Host = "email-ssl.com.br";
// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
  $mail->Port = 587; 
// Usar autenticação SMTP (obrigatório) 
  $mail->SMTPAuth = true; 
// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
  $mail->Username = 'website@servermail.srv.br'; 
  $mail->Password = '#'; 
// Configurações de compatibilidade para autenticação em TLS 
  $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
// $mail->SMTPDebug = 2; 
// Define o remetente 
// Seu e-mail 
  $mail->From = 'website@servermail.srv.br';
// Seu nome 
  $mail->FromName = "Alper Histórico"; 
  $mail->AddReplyTo($email, $nome);
// Define o(s) destinatário(s) 
  $mail->AddAddress('patrick@agenciaalper.com.br', 'Informação Adicional Inserida'); 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
  $mail->IsHTML(true); 
// Charset (opcional) 
  $mail->CharSet = 'UTF-8'; 
// Assunto da mensagem 
  $mail->Subject = "Nova Informação Adicional: ".$nome; 
// Corpo do email 
  $body = '<h2 style="font-family: Verdana; color: #444; text-align: left; text-transform: uppercase; border-bottom: 1px solid #777; border-top: 1px solid #777; padding-bottom: 10px; padding-top: 10px; float: left; width: 100%;">Nova Informação Adicional: '.$nome.'</h2>';
  $body .= '<p style="font-family: Verdana; color: #444; text-align: left; margin: 0; width: 100%;"><b>Cliente:</b> '.$nome.'</p>';
  $body .= '<p style="font-family: Verdana; color: #444; text-align: left; margin: 0; width: 100%;"><b>Informação Adicional:</b> '.$informacao_adicional.'</p>';
  $mail->Body = "$body";
  $enviado = $mail->Send(); 
}
?>