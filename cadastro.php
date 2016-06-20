<!DOCTYPE html>
<html>
<head>
  <title>Jinteki</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="estilos/w3.css">
  <link rel="stylesheet" href="estilos/bootstrap.min.css" />
  <script src="scripts/jquery.min.js"></script>
  <script src="scripts/bootstrap.min.js"></script>
  <script src="scripts/center.js"></script>
  <script src="scripts/jquery.maskedinput.min.js"></script>
  <link rel="stylesheet" type="text/css" href="estilos/signin.css" />
  <link rel="stylesheet" href="estilos/movimentacao.css" />
  <link rel="stylesheet" href="estilos/detalhes.css" />
  <link rel="stylesheet" href="estilos/pendencias.css" /> 
  <link href='https://fonts.googleapis.com/css?family=Passion+One:400,900' rel='stylesheet' type='text/css'>
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
		<li><a href="#" id="cdst">Cadastro</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <div class="center"><img src="imagens/logo2.jpg" />
  <h3>Cadastro</h3></div>

  <div class="container">
    <div class="meio">
      
      <div class="titulo-detalhes">Nome Completo*: </div> 
        <input class="w3-input inline" style="width:280px"  type="text" name= "nome" id="nomeCompleto" value="" required>
      <br />

      <div class="titulo-detalhes">Telefone 1*: </div> 
        <input class="w3-input inline campoTelefone" style="width:130px" type="text" name="telefone1" value="" required>
      <br />

      <div class="titulo-detalhes">Telefone 2: </div> 
        <input class="w3-input inline campoTelefone" style="width:130px" type="text" name= "telefone2" value="">
      <br />

      <div class="titulo-detalhes">Email*: </div> 
        <input class="w3-input inline" style="width:230px" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" required>
      <br />

      <div class="titulo-detalhes">RG*: </div> 
        <input class="w3-input inline" style="width:110px"  type="text" name= "rg" id="RG" value="" required>
      <br />

      <div class="titulo-detalhes">CPF*: </div> 
        <input class="w3-input inline" style="width:120px"  type="text" name= "cpf" id="CPF" value="" required>
        <br>

      <div class="titulo-detalhes">Senha*: </div> 
        <input class="w3-input inline" style="width:180px"  type="password" name= "senha" id="senha" value="" required>
        <br>

      <div class="titulo-detalhes">Confirmação de senha*: </div> 
        <input class="w3-input inline" style="width:180px"  type="password" name= "confSenha" id="confSenha" value="" required>
        <br><br>

        
      </form>
      <FORM class="inline"><INPUT Type="button" class="botao-branco" VALUE="Voltar" onClick="history.go(-1);return true;" /></FORM>
        <button class="btn btn-lg btn-primary botao" id="branco" type="submit">Enviar</button>

    </div>
  </div>


<script>
jQuery(function($){
       $(".campoTelefone").mask("(99) 9999-9999");
       $("#CPF").mask("999.999.999-99");
       $(".campoTag").mask("999.999.999");
       $("#RG").mask("***********");
});
</script>

</body>