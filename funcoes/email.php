<?php
function email($email,$nome,$msg,$destino, $login, $senha, $titulo){
require_once('class.phpmailer.php');if ($login==""){$login='agencia@grupocriarte.com';};if ($senha==""){$senha='visual07';};if ($titulo==""){$titulo="Formulario de contato do site.<br/>";};
error_reporting(E_STRICT); date_default_timezone_set('America/Toronto'); $mail=newPHPMailer(); $mail->IsSMTP(); $mail->Host="stmp.gmail.com"; $mail->SMTPDebug=1; $mail->SMTPAuth=true; $mail->SMTPSecure="ssl"; $mail->Host="smtp.gmail.com"; $mail->Port=465; $mail->Username=$login; $mail->Password=$senha; $mail->SetFrom($email,$nome); $mail->AddReplyTo($email,$nome); $mail->Subject=$titulo; $mail->AltBody="Para visualizar a mensagem corretamente, por favor use um visualizador de e-mail compativel!"; $mail->MsgHTML($msg); $mail->AddAddress($destino,$destino);if(!$mail->Send()){echo"<script>window.alert('Erro: " .$mail->ErrorInfo. "');</script>";}else{echo"<script>window.alert('Mensagem enviada com sucesso!');</script>";}}
?>
