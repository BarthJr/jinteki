<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira

-->
<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/jinteki/system/system.php';
	//AcessPrivate();

	//$t="123456789";
	//$nmMorador='Junior Barth';
	//$numAP="A002";

	$key= $_GET['userkey'];
	//var_dump($key);
	//$query.="WHERE t.CodApartamento = a.CodAp AND a.CodAp = m.CodApartamento AND m.Nome = 'Junior Barth'";
	
?>
<!DOCTYPE html>
<html>
<head>
  <title>Jinteki</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="center.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Passion+One:400,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="estilos/signin.css" />
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img class="navbar-brand" src="imagens/logo.jpg" />
    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="menu-item">Jinteki <span class="sr-only">(current)</span></a></li>
        <li><a class="menu-item" id="ctrl">Controle de Acesso</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="fcnsc">Fale Conosco</a></li>
		<li><a href="#" id="cdst">Cadastro</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="center"><img src="imagens/logo2.jpg" />
	<h3>Controle de Entrada - Jinteki</h3></div>

	<div class="container">
		<form class="form-signin">
			<div class="nome">
		        <h2 class="form-signin-heading">Login</h2>
		        <label for="inputTag" class="sr-only">TAG</label>
		        <input type="text" id="inputTag" class="form-control" placeholder="TAG" required="" autofocus="">
		        <label for="inputPassword" class="sr-only">SENHA</label>
		        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">

		        <a class="btn btn-lg btn-primary btn-block" href="movimentacoes.php" type="submit">Entrar</a>
		    	
		    	<a type="button" class="left" data-toggle="modal" data-target="#modalSenha">Esqueceu sua senha?</a>
		    	<a class="right" href="#">CADASTRE-SE</a>
		    </div>
		</form>

		<!-- Modal -->
	  <div class="modal fade" id="modalSenha" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Recuperar Senha</h4>
	        </div>
	        <div class="modal-body">
	          <form class="form-signin">
			        <h4>E-mail cadastrado: </h2>
			        <input type="email" id="inputEmail" class="form-control" required="" autofocus="">  	
			  </form>
	          <button type="button" class="btn btn-default left-2" data-dismiss="modal">Cancelar</button>
	          <button class="btn btn-default right-2" type="submit">Enviar</button>
	        </div>
	      </div>      
   		</div>
   	</div>
  </div>



</body>
</html>