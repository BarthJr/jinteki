<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira

-->
<?php

	// Recupera Informações do Usuário
	function GetUser($key = null){
		if(!IsLogged())
			return false;
		else{
			$userkey = UserLog();
			$query = "SELECT * FROM membros WHERE userkey = '$userkey' AND status = true LIMIT 1";
			$result = DBExecute($query);
			$data = mysqli_fetch_assoc($result);

			if($key == null)
				return $data;
			else
				return (isset($data[$key])) ? $data[$key] : false;

		}

	}
	// Verifica Usuário Logado
	function StayLogged(){
		$userkey = UserLog();
		$query = "SELECT userkey FROM membros WHERE userkey = '$userkey' AND status = true";
		$result = DBExecute($query);

		if(mysqli_num_rows($result) <= 0)
			return false;
		else
			return true;

	}

	// Recupera Key
	function GetKey($username, $status=false){
		//$dataUser = UserVerify($username,$password, true);
		//return $dataUser;
		//return UserVerify($username,$password, true);
		$query = "SELECT * FROM membros WHERE username = '$username'";
		$query .= ($status) ? " AND status = true" : '';
		$result = DBExecute($query);
		if(mysqli_num_rows($result) <= 0)
			return false;
		else{
			$data = mysqli_fetch_assoc($result);
			return $data['userkey'];
		}

	}

	//Altera o Último acesso
	function GetLastAcess($value){
			$last_acess= time();
			$query  = "UPDATE membros SET last_acess=$last_acess where userkey='$value'";
			$result = DBExecute($query);
		}


	// Verifica Usuário
	function UserVerify($username, $password, $status=false){
	    $password= CryptPassword($password);
		$query = "SELECT * FROM membros WHERE username = '$username' AND password = '$password'";
		$query .= ($status) ? " AND status = true" : '';
		$result = DBExecute($query);

		//echo(var_dump($result));
		if(mysqli_num_rows($result) <= 0)
			return false;
		else{
			$data = mysqli_fetch_assoc($result);
			return $data['userkey'];
		}
	}

	//Cadastra Usuário
	function Register($name, $mail, $username,$password, $status = true){
		$password = CryptPassword($password);
		$userkey  = KeyGenerator();
		$register = time();

		$query  = "INSERT INTO membros (name, mail, username, password, userkey, register, status) VALUES ('$name','$mail','$username','$password','$userkey',$register,$status)";

		return DBExecute($query);

		//return mysqli_query($query) or die(mysqli_error());


	}
	function RegisterTag($nm_tag,$active,$cod_morador,$perm){

		$query = "INSERT INTO TAG(NumTag, Estado, CodMorador, CodPermissao) VALUES ('$nm_tag', '$active', '$cod_morador', '$perm')";
		return DBExecute($query);
	}
	function RegisterDweller($nm_morador,$ap,$nm_tag,$tel1,$tel2,$email,$rg,$cpf){
		$query = "INSERT INTO Morador(Nome,CodApartamento,Email,RG,CPF) VALUES ('$nm_morador','$ap','$email','$rg','$cpf')";
		return DBExecute($query);
	}

	//Verifica se Login Existe
	function UserNameExists($username){
		$query = "SELECT username FROM membros WHERE username = '$username'";
		$result = DBExecute($query);

		if(mysqli_num_rows($result) <= 0)
			return false;
		else
			return true;


	}

	//Verifica se Existe Email
	function MailExists($mail){
		$query = "SELECT mail FROM membros WHERE mail = '$mail'";
		$result = DBExecute($query);
		if(mysqli_num_rows($result) <= 0)
			return false;
		else
			return true;
	}
	// Executa Querys
	function DBExecute($query){
		$link 	= DBConnect();
		//echo(var_dump($link));
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		//echo(var_dump($result));
		//$resultado = mysqli_insert_id($link);
		
		DBClose($link);
		return $result;
	}

	// Conexao BD

	function DBConnect(){
		$link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_connect_error());
		mysqli_set_charset($link,DB_CHARSET) or die(mysqli_error($link));
		return $link;
	}

	// Executa Querys
	function Execute($query){
		//$link 	= Connect();
		$result = mysql_query($query) or die(mysql_error());
		
		//$result = mysql_insert_id($link);
		
		//Close($link);
		return $result;
	}

	//Conexao com o BD

	function Connect(){
		$conn = mysql_connect(DB_HOSTNAME,DB_USERNAME, DB_PASSWORD);
		if(!$conn)
			die(mysql_error());
		else{
			mysql_select_db(DB_DATABASE, $conn) or die(mysql_error());

			mysql_query("SET NAMES 'utf-8'");
			mysql_query("SET character_set_connection=utf8");
			mysql_query("SET character_set_client=utf8");
			mysql_query("SET character_set_results=utf8");
		}
		//return $conn;


	}

	function DBClose($link){
	 	@mysqli_close($link) or die(mysqli_error($link));

	 }
	 function Close($link){
	 	mysql_close($link) or die(mysqli_error());

	 }

	 //Altera Registros
	 function DBUpdate($table, array $data, $where = null){
	 	foreach ($data as $key => $value) {
	 		$fields[] = "{$key} = '{$value}'";
	 	}
	 	$fields = implode(', ', $fields);

	 	$where = ($where) ? " WHERE {$where}" : null;
	 	$query = "UPDATE {$table} SET {$fields}{$where}";
	 	var_dump($query);

	 	return DBExecute($query);

	 }

	 function DBRead ($table, $params = null, $fields = '*'){
	 	$params = ($params) ? " {$params}" : null;
	 	$query = "SELECT {$fields} FROM {$table}{$params}";

	 	$result = DBExecute($query);
	 	if(!mysqli_num_rows($result)){
			return false;
	 	}
		else{
			while($res = mysqli_fetch_assoc($result)){
				$data[] = $res;
			}
			return $data;
		}


	 }

	 function DBDelete($table, $where = null){
	 	$where = ($where) ? " WHERE {$where}" : null;
	 	$query = "DELETE FROM {$table}{$where}";
	 	return DBExecute($query);

	 }
	function SendMail($subject, $message, $to, $toName){
		$mail = new PHPMailer();

		// Servidor
		$mail->isSMTP();
		$mail->Host = MAIL_HOST;
		$mail->SMTPAuth = true;
		$mail->Username = MAIL_USER;
		$mail->Password = MAIL_PASS;
		$mail->Port = MAIL_PORT;
		$mail->SMTPSecure = MAIL_SECURE;

		//Remetente
		$mail->setFrom(MAIL_USER,SITE_NAME);
		$mail->addReplyTo(MAIL_USER,SITE_NAME);

		//Destino
		$mail->addAddress($to, $toName);

		//Dados da Mensagem

		$mail->isHTML(true);
		$mail->CharSet = 'utf-8';
		$mail->WordWrap = 70;

		//Mensagem
		$mail->Subject = $subject;
		$mail->Body = $message;
		$mail->AltBody = strip_tags($message);

		return $mail->Send();

	}
	function SendMail1(){
		//require $_SERVER['DOCUMENT_ROOT'].'mail/PHPMailer/PHPMailerAutoload.php';

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

	} 