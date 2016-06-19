<!DOCTYPE html>
<html>
<head>
<head>
	<title>Porta</title>
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
</head>
</head>
<body>
	
	<div class="container">
		<div class="col-sm-6 flex">
			<div class="vertical-center">
				<form id="portaForm">
				
					<input class="form-control campoTag" name="fields[]" type="text" form="portaForm" type="number" name="tagNova" placeholder="TAG" />
					<div class="master"> <!-- Remover a classe "master" se a tag digitada for a master-->
						<br />
						<p>Tag master inserida!</p><br />
						<p>Digite a nova TAG:</p><br />
						<input class="form-control campoTag" name="fields[]" type="text" form="portaForm" type="number" name="tagNova" placeholder="TAG nova" />
					</div>				
				</form>
				<div class="alert alert-danger vis-none"> <!-- remover a classe vis-none se a tag digitada não existir, ou se não tiver permissão ce acesso -->
					<p>Erro! Tag não existe, ou permissão de acesso negado.</p>
				</div>
				<div class="alert alert-success vis-none"> <!-- remover a classe vis-none se a tag estiver no sistema e tiver permissão de acesso nesse horário -->
					<p>Entrada permitida!</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<img class="porta" src="imagens/porta_fechada.jpg" /> <!-- mudar para porta_aberta.jpg se a tag digitada estiver no sistema e tiver permissão de acesso nesse horário-->
		</div>

<script>
jQuery(function($){
       $(".campoTag").mask("999.999.999");
});
</script>

</body>
</html>