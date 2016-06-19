<?php
	require 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer();

	$host     ='smtp.gmail.com';
	$username = 'contato.jintekicondominios@gmail.com';
	$password = 'cAo$$0hGpM6s';
	$port     = 587;
	$secure   = 'tls';	

	$mail->isSMTP();
	$mail->Host = $host;
	$mail->SMTPAuth = true;
	$mail->Username = $username;
	$mail->Password = $password;
	$mail->SMTPSecure = $secure;
	$mail->Port     = $port;

	$from     = $username;
	$fromName = 'Jinteki';
	
	$mail->setFrom($from,$fromName);
	$mail->addReplyTo($from,$fromName);

	$to='juniior.barth@gmail.com';
	$toName='Junior Barth';

	$mail->addAddress($to,$toName);

	$mail->isHTML(true);
	$mail->CharSet = 'utf-8';
	$mail->WordWrap = 70;

	$subject= 'Enviando email com o phpmailer';
	$message= '<h1> Enviando email com o phpmailer</h1> do <b> localhost</b>';

	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->AltBody = strip_tags($message);

	$send = $mail->Send();

	if($send)
		echo 'Email enviado com sucesso!';
	else
		echo 'Erro: '.$mail->ErrorInfo;

?>