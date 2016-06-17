<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira

-->
<?php

	Init(); 


	//Busca na pagina de acordo com os campos digitados
	function Buscar(){
		$query="WHERE a.CodAp = m.CodApartamento AND t.CodMorador = m.CodMorador";
		if(GetPost('send')){
			$t=GetPost('tag');
			$nmMorador=GetPost('nome-cliente');
			$numAP=GetPost('apartamento');

			$query.= ($t) ? " AND NumTAG = '$t'" : '';
			$query.= ($nmMorador) ? " AND m.Nome = '$nmMorador'" : '';
			$query.= ($numAP) ? " AND NomeAP = '$numAP'" : '';
		}
		$data=DBRead('TAG as t, Apartamento as a, Morador as m',$query,"t.NumTAG, a.NomeAP, m.Nome, t.UltAcesso");
		return $data;

	}
	function Update(){
		if(GetPost('send')){
			$key = UserLog();
			$dado = GetPost('updatename');
			$membro = array(
			'name' => $dado
			);
			DBUpdate('membros',$membro,"userkey = '$key'");

		}

	}
	function ValidateFormUpdateAp(){
		if(GetPost('send')){
			$Apart=GetPost('Ap');
			var_dump($Apart);
			echo "OK";
		}

	}


	//Valida Forme de Login
	function ValidateFormLogin(){
		
		if(GetPost('send')){
			$message = null;
			$username = GetPost('username');
			$password = GetPost('password');
			if(empty($username))
				$message = 'Informe seu nome de usuário!';
			else if (empty($password))
				$message = 'Informe sua senha!';
			else{
				if(!UserVerify($username,$password))
					$message = 'Nome de usuário ou senha incorretos';
				else if (!UserVerify($username,$password,true))
					$message = 'Esta conta foi desativada';
				else{
					//$password= CryptPassword($password);
					CreateSession($username,$password);
					AcessPublic();
					//Redirect(URL_LOGIN);
				}

			}

			echo ($message !=null)? $message.'<hr>' : null;
		}


	}

	//valida form de cadastro
	function ValidateFormRegister(){
		if(!!GetPost('send')){
			$message = null;

			$name = GetPost('name');
			$mail = GetPost('mail');
			$username = GetPost('username');
			$password = GetPost('password');
			$confirm = GetPost('confirm');


			if(empty($name))
				$message = 'Informe eu nome!';
			else if(empty($mail))
				$message = 'Informe seu e-mail';
			else if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
				$message= 'Informe um E-mail Válido!';
			else if(empty($username))
				$message = 'Informe seu nome de Usuario';
			else if(empty($password))
				$message = 'Informe sua Senha!';
			else if(empty($confirm))
				$message = 'Confirme sua Senha!';
			else if($password!= $confirm)
				$message = 'As senhas não correspondem!';
			else{
				if(MailExists($mail))
					$message = 'Este email ja foi cadastrado!';
				else if(UserNameExists($username))
					$message = 'Este nome de usuario ja foi cadastrado!';
				else{
					$register = Register($name, $mail, $username, $password);
					if(!$register){
						$message = 'Desculpe, ocorreu um erro...';
					}
					else{
						
						CreateSession($username,$password);
						$userkey=UserLog();
						$subject = 'Inscrito com sucesso';
						$url = URL_BASE.'paginas/login.php?userkey='.$userkey;
						$message = 'Olá, '.$name.' acesse esse link para alterar seus dados: '.$url;
						$send = SendMail($subject, $message, $mail, $name); 

						/*$GUser= GetUser();
						echo $GUser['name'];
						$subject = 'Inscrito com sucesso';
						$url = URL_BASE.'paginas/update.php?userkey='.$GUser['userkey'];
						$message = 'Olá, '.$GUser['name'].' acesse esse link para alterar seus dados: '.$url;
						$send = SendMail($subject, $message, $GUser['mail'], $GUser['name']); */
						AcessPublic();
					}
				}
			}

			echo($message !=null) ? $message.'<hr>' : null;
		}
	}
	//Inicia o Sistema
	function Init(){
		session_start();
		$configFile =  $_SERVER['DOCUMENT_ROOT'].'/jinteki/system/config.php';
		if(!file_exists($configFile))
			die('Erro arquivo config.php nao existe!');
		else
			require_once $configFile;

		// Chama Helpers
		if(!file_exists(FILE_HELPERS))
			die('Erro arquivo helpers.php nao existe!');
		else
			require_once FILE_HELPERS;

		//Chama DataBase
		if(!file_exists(FILE_DATABASE))
			die('Erro arquivo database.php nao existe!');
		else
			require_once FILE_DATABASE;


		//Chama Mail
		if(!file_exists(FILE_MAIL))
			die('Erro arquivo mail.php nao existe!');
		else
			require_once FILE_MAIL; 

		//DBConnect();
		//DBConnect();
		DoLogout();
	}