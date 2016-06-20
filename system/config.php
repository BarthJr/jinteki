<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira

-->
<?php

	//BD
	define('DB_HOSTNAME','localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'admin');
	define('DB_DATABASE', 'jinteki');
	define('DB_CHARSET','utf8');

	//URL'S
	define('URL_BASE','http://localhost/jinteki/');
	define('URL_REGISTER', URL_BASE.'paginas/register.php');
	define('URL_LOGIN', URL_BASE.'paginas/login.php');
	define('URL_DADOS', URL_BASE.'paginas/dados.php');
	define('URL_UPDATE', URL_BASE.'paginas/update.php');
	define('URL_DETALHES_TAG', URL_BASE.'detalhes_tag.php');
	define('URL_DETALHES_MORADOR', URL_BASE.'detalhes_cliente.php');
	define('URL_DETALHES_AP', URL_BASE.'detalhes_ap.php');

	//DIR'S
	define('DIR_BASE', $_SERVER['DOCUMENT_ROOT'].'/jinteki/');

	define('DIR_SYSTEM', DIR_BASE.'system/');

	// FILE'S
	define('FILE_CONFIG',DIR_SYSTEM.'config.php');
	define('FILE_HELPERS',DIR_SYSTEM.'helpers.php');
	define('FILE_DATABASE',DIR_SYSTEM.'database.php');
	define('FILE_SYSTEM',DIR_SYSTEM.'system.php');
	define('FILE_MAIL',DIR_SYSTEM.'mail/PHPMailer/PHPMailerAutoload.php');

	// SISTEMA INFO
	define('SITE_NAME','Sistema Jinteki');

	//Servidor Mail
	define('MAIL_HOST','smtp.gmail.com');
	define('MAIL_USER','contato.jintekicondominios@gmail.com');
	define('MAIL_PASS','cAo$$0hGpM6s');
	define('MAIL_PORT',587);
	define('MAIL_SECURE','tls');
	
	
	

	
	
	