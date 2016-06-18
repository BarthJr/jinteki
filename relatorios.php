<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Movimentação</title>
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
  <link rel="stylesheet" href="estilos/esconder.css" /> 

</head>

<body>
	
	<iframe src="navbar.php" style=" margin-top: 10px; border: none; height: 70px; width: 100%"></iframe>

	<div class="container">
		<div class="meio">

			<div>
			    <input type="checkbox" id="plus" />
			    <label for="plus"></label>
				<form id ="busca" class="w3-row-padding hide-show">
				  <p class="campo col-md-4">Nome:</p><p class="campo col-md-4">Nº da TAG:</p><p class="campo col-md-4">Apartamento:</p>
				  <br />
				  
					  <div class="col-md-4"><input type="text" name="nome" class="w3-input" /></div>
					  <div class="col-md-4"><input type="text" name="tag" class="w3-input campoTag" /></div>
					  <div class="col-md-4"><input type="text" name="partamento" class="w3-input campoAp" /></div>
				  
				  <br />
				  <div class="container col-md-12" style="visibility: hidden">.</div>
				  <p class="campo col-md-6">Horário do último acesso entre:</p>
				  <p class="campo col-md-6">Dia do último acesso entre:</p>
				  <br />
				  
				  <div class="col-md-3"><input type="time" name="tempoMenor" class=""></div>
				  <div class="col-md-3"><input type="time" name="tempoMaior" class=""></div>
				  <div class="col-md-3"><input type="date" name="diaMenor" class=""></div>
				  <div class="col-md-3"><input type="date" name="diaMaior" class=""></div>

				  <br>
				  
				  <button form="busca" class="botao">Gerar</button>
				  <button form="busca" class="botao-branco" type="reset">Limpar</button>
				</form>
			</div>

			<div>
			    <input type="checkbox" id="plusTag" />
			    <label for="plusTag"></label>
				<form id ="busca-movimentacao" class="w3-row-padding hide-show">
				  <p class="campo col-md-4">Nome:</p><p class="campo col-md-4">Nº da TAG:</p><p class="campo col-md-4">Apartamento:</p>
				  <br />
				  
					  <div class="col-md-4"><input type="text" name="nome" class="w3-input" /></div>
					  <div class="col-md-4"><input type="text" name="tag" class="w3-input campoTag" /></div>
					  <div class="col-md-4"><input type="text" name="partamento" class="w3-input campoAp" /></div>
				  
				  <br />
				  <div class="container col-md-12" style="visibility: hidden">.</div>
				  <p class="campo col-md-6">Horário do último acesso entre:</p>
				  <p class="campo col-md-6">Dia do último acesso entre:</p>
				  <br />
				  
				  <div class="col-md-3"><input type="time" name="tempoMenor" class=""></div>
				  <div class="col-md-3"><input type="time" name="tempoMaior" class=""></div>
				  <div class="col-md-3"><input type="date" name="diaMenor" class=""></div>
				  <div class="col-md-3"><input type="date" name="diaMaior" class=""></div>

				  <br>
				  
				  <button form="busca" class="botao">Gerar</button>
				  <button form="busca" class="botao-branco" type="reset">Limpar</button>
				</form>
			</div>

</body>