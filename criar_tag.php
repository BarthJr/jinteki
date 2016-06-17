<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira

-->
<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/jinteki/system/system.php';
	//AcessPrivate();
	$key= $_GET['userkey'];
	

	//$dataUser = GetUser();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Criar TAG</title>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="center.js"></script>
  <script src="center.js"></script>
  <script src="jquery.maskedinput.min.js"></script>
  <link rel="stylesheet" type="text/css" href="estilos/signin.css" />
  <link rel="stylesheet" href="estilos/movimentacao.css" />
  <link rel="stylesheet" href="estilos/detalhes.css" />
  
</head>

<body>
	<div class="container topo">
		<div class="col-md-12 up">
			<img class="navbar-brand" src="logo2.jpg" />
			<p class="top-name">Jinteki</p>
			<ul  class="direita">
				<li><a href="tags.php">TAGs</a></li>
				<li><a href="clientes.php"">Clientes</a></li>
				<li><a href="apartamentos.php">Apartamentos</a></li>
				<li><a href="#">Relatórios</a></li>
				<li><a href="#">Pendências</a></li>
				<li><a href="movimentacoes.php">Movimentação</a></li>
				<li><a href="#"><img class="icon" src="profile.png" /></a></li>
				<li><a href="#"><img class="icon" src="sino.jpg" /></a></li>
				<li><a href="#"><img class="icon" src="imagens/sair.jpg" /></a></li>
			</ul>
		</div>
	</div>
	<br />

	<?php ValidateFormTag();?>
	<form action="criar_tag.php" method="post" id="alg">
	<div class="risco"></div>

	<div class="container">

		<h3 class="titulo"><a href="movimentacoes.php">Home</a>><a href="tags.php">TAGs</a>><a class="active">Criar TAG</a></h3>

		<div class="meio">

			<div class="titulo-detalhes">Número da TAG: </div> 
				<input class="w3-input inline" id="numeroTAG" style="width:110px; text-align:center" type="text" name="nm_tag">
			</select>
			<br /><br />
			<div class="titulo-detalhes">Situação: </div> 
			<select name="active" class="inline">
			  <option value=""></option>
			  <option value="1">Ativo</option>
			  <option value="0">Inativo</option>
			</select>
			<br /><br />
			
			<div class="titulo-detalhes">Morador: </div> 
			<select name="cod_morador" class="inline">
			<option value=""></option>
			<?php
				$dataM=DBRead('Morador as m','','m.CodMorador,m.Nome');
				var_dump($dataM);
			  	foreach ($dataM as $res) : ?>
			  		<option value="<?php echo $res['CodMorador'] ?> "><?php echo $res['Nome'];?></option>
			<?php endForEach; ?>  
			</select>
			<br /><br />
			<div class="titulo-detalhes">Permissão de acesso: </div> 
			<select name="HrAcess" class="inline">
			  <option value=""></option>
			  <option value="A102">Todos os horários</option>
			  <option value="A103">Horário comercial</option>
			  <option value="A104">Nenhum</option>
			</select>
			<br /><br />
			<div class="titulo-detalhes">Permissões: </div> 
			<select name="perm" class="inline">
			  <option value=""></option>
			  <option value="1">Morador</option>
			  <option value="2">Administrador do apartamento</option>
			  <option value="3">Administrador do sistema</option>
			</select>
			<br /><br />
			  <INPUT Type="button" class="botao-branco" VALUE="Voltar" onClick="history.go(-1);return true;">
			  <a type="button" class="botao" data-toggle="modal" data-target="#modalCriar">Criar</a>
		</div>
	</div>

		<!-- Modal -->
	  <div class="modal fade" id="modalCriar" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Confirmar Criação</h4>
	        </div>
	        <div class="modal-body">
	          <p class="vertical-center">Salvar o novo registro no banco de dados?</p>
	          <button type="button" class="btn btn-default left-2" data-dismiss="modal">Cancelar</button>
	          <input class="btn btn-default right-2" type="submit" form="alg" name="send" value="Salvar"></input>
	        </div>
	      </div>      
   		</div>
   	</div>
  </div>
  </form>
<script>
jQuery(function($){
       $("#numeroTAG").mask("999.999.999");
});
</script>
</body>
</html>