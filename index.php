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

	
	//var_dump($key);
	//$query.="WHERE t.CodApartamento = a.CodAp AND a.CodAp = m.CodApartamento AND m.Nome = 'Junior Barth'";
	
?>
<!DOCTYPE html>
<html>
<head>
  <title>Jinteki</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="estilos/bootstrap.min.css" />
  <script src="scripts/jquery.min.js"></script>
  <script src="scripts/bootstrap.min.js"></script>
  <script src="scripts/jquery.maskedinput.min.js"></script>
  <script src="center.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Passion+One:400,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="estilos/signin.css" />
  <link rel="stylesheet" href="estilos/movimentacao.css" />
  <link rel="stylesheet" href="estilos/detalhes.css" />
  <link rel="stylesheet" href="estilos/pendencias.css" /> 
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
        <li><a href="fale conosco.php" id="fcnsc">Fale Conosco</a></li>
		<li><a href="cadastro.php" id="cdst">Cadastro</a></li>
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
		        <label for="inputTag" class="sr-only ">TAG</label>
		        <label for="inputPassword" class="sr-only">SENHA</label>
		        <form>
				  <input type="text" name="tag" placeholder="TAG" class="form-control campoTag">
				 
				  <input type="password" name="senha" placeholder="Senha" class="form-control">
				  <input type="submit" value="Entrar" class="botao direita">
				</form>

		    	<a type="button" class="left" data-toggle="modal" data-target="#modalSenha">Esqueceu sua senha?</a>
		    	<a class="right" href="cadastro.php">CADASTRE-SE</a>
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
			        <h4>E-mail cadastrado: </h4>
			        <input type="email" id="inputEmail" class="form-control" required="" autofocus="">  	
			  </form>
	          <button type="button" class="btn btn-default left-2" data-dismiss="modal">Cancelar</button>
	          <button class="btn btn-default right-2" type="submit">Enviar</button>
	        </div>
	      </div>      
   		</div>
   	</div>
  </div>
<script>
/*jQuery(function($){
       $(".campoTag").mask("999.999.999");
}); */

</script>


</body>
</html>