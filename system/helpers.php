<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira

-->
<?php
	

	/* ========================================*/
		// PROTEÇÃO

		// Controla Acesso Público
		function AcessPublic(){
			if(IsLogged())
				Redirect(URL_LOGIN);
		}



		// Controla Acesso Privado
		function AcessPrivate(){
			if(!IsLogged())
				Redirect(URL_BASE);
			
		}


	// ========================================






	/* ========================================*/
		// SESSÃO


		//Efetua Logout
		function DoLogout(){
			if(isset($_GET['logout']))
				DestroySession();

		}
		// Destroi Sessao
		function DestroySession(){
			unset($_SESSION['userLog']);
			AcessPrivate();


		}

		// Criar a Sessão
		function CreateSession($username, $password){

			$key = UserVerify($username,$password,true);
			if($key)
				GetLastAcess($key);
			UserLog($key);
		}

		//Seta ou Recupera o USER LOG
		function UserLog($value = null){
			if($value === null)
				return $_SESSION['userLog'];
			else
				$_SESSION['userLog'] = $value;

		}


		// Verifica Login
		function IsLogged(){
			if(!isset($_SESSION['userLog']) || empty($_SESSION['userLog']))
				return false;
			else
				if(StayLogged())
					return true;
				else
					DestroySession();
		}

		

		


	// ========================================

	
	// Criptografar Senhas
	function CryptPassword($password){
		return sha1($password);

	}
	// Gera KEY Usuário
	function KeyGenerator(){
		return sha1(rand().time());

	}

	//Recuperar POST
	function GetPost($key = null){
		if($key === null)
			return $_POST;
		else
			return(isset($_POST[$key])) ? DBEscape($_POST[$key]) : false;

	}
	//Redireciona
	function Redirect($url){
		header("Location: ".$url);
		die();
	}


	// Protege contra SQL Injection
	function DBEscape($dados){
			$link = DBConnect();
			if(!is_array($dados))
				$dados = mysqli_real_escape_string($link,$dados);
			else{
				$arr = $dados;
				foreach($arr as $key => $value){
					$key = mysqli_real_escape_string($link,$key);
					$value = mysqli_real_escape_string($link,$value);

					$dados[$key]=$value;
				}

			}

			DBClose($link);
			return $dados;
		}

		function Escape($dados){
			if(!is_array($dados))
				$dados = mysql_real_escape_string(strip_tags(trim($dados)));
			else{
				$arr = $dados;
				foreach($arr as $key => $value){
					$key = mysql_real_escape_string(strip_tags(trim($key)));
					$value = mysql_real_escape_string(strip_tags(trim($value)));

					$dados[$key]=$value;
				}
				return $dados;

			}
			return $dados;
		}

	// Limpa String
	function ClearString($str){
		return mysql_real_escape_string(strip_tags(trim($str)));
	}