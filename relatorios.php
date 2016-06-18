
<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira
-->
<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/jinteki/system/system.php';
	//AcessPrivate();
	
	//$dataUser = GetUser();
?>

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
			    <label class="mov" for="plus"></label>
				<form id ="busca" class="w3-row-padding hide-show">
				  <p class="campo col-md-4">Nome:</p><p class="campo col-md-4">Nº da TAG:</p><p class="campo col-md-4">Apartamento:</p>
				  <br />
				  
					  <div class="col-md-4"><input type="text" name="nome" class="w3-input" /></div>
					  <div class="col-md-4"><input type="text" name="tag" class="w3-input campoTag" /></div>
					  <div class="col-md-4"><input type="text" name="partamento" class="w3-input campoAp" /></div>
				  
				  <br />
				  <div class="container col-md-12" style="visibility: hidden">.</div>
				  <p class="campo col-md-6">Acessos entre:</p>
				  <p class="campo col-md-6">Horário</p>
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
			    <label class="taag" for="plusTag"></label>
				<form id ="buscaTag" class="w3-row-padding hide-show">
				  <p class="campo w3-third">TAG:</p><p class="campo w3-third">Nome do cliente:</p><p class="campo w3-third">Apartamento:</p>
				  <br />

				  <div class="col-md-4"><input type="number" name="tag" value='<?php if(!GetPost('clear')) echo GetPost('tag'); ?>' class="w3-input" /></div>
				  <div class="col-md-4"><input type="text" name="nome-cliente" value='<?php if(!GetPost('clear')) echo GetPost('nome-cliente'); ?>' class="w3-input" /></div>
				  <div class="col-md-4"><input type="text" name="apartamento" value='<?php if(!GetPost('clear')) echo GetPost('apartamento'); ?>' class="w3-input" /></div>
					
								  <div class="container col-md-12" style="visibility: hidden">.</div>

				  <p class="campo w3-third">Status:</p><p class="campo w3-third">Permissão:</p><p class="campo w3-third" style="visibility: hidden">.</p>
				  <br /><br>

				  <div class="col-md-4" style="display: block"><select><option></option><option>Ativo</option><option>Inativo</option></select></div>
				  <div class="col-md-4" style="display: block"><select><option></option><option>Morador</option><option>Administrador local</option><option>Administrador do sistema</option></select></div>
				  <div class="col-md-4" style="visibility: hidden; display: block">.</div>
				  
					<div class="container col-md-12" style="visibility: hidden">.</div>


				  <button form="buscaTag" class="botao">Gerar</button>
				  <button form="buscaTag" class="botao-branco" type="reset" name="clear">Limpar</button>
				  </form>
			</div>

</body>