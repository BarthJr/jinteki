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

<body>

	<iframe src="navbar.php" style=" margin-top: 10px; border: none; height: 70px; width: 100%"></iframe>


	<form action="" method="post" name="">
	
	<div class="container">

		<h3 class="titulo"><a href="movimentacoes.php">Home</a>><a href="tags.php">TAGs</a>><a class="active">Criar TAG</a></h3>

		<div class="meio">

			<div class="titulo-detalhes">Número da TAG: </div> 
				<input class="w3-input inline" id="numeroTAG" style="width:110px; text-align:center" type="text" name="telefone1">
			</select>
			<br /><br />
			<div class="titulo-detalhes">Situação: </div> 
			<select class="inline">
			  <option value=""></option>
			  <option value="1">Ativo</option>
			  <option value="0">Inativo</option>
			</select>
			<br /><br />
			<div class="titulo-detalhes">Apartamento: </div> 
			<select name= "Ap" class="inline">
			<option value=""></option>
			<?php
			  $dataAP=DBRead('Apartamento as a','','a.CodAp,a.NomeAp');
			  foreach ($dataAP as $res) {

			?>
			  <option value="echo $res['CodAp']"><?php echo $res['NomeAp'];?></option>
			  <!--<option value=""></option>
			  <option value="A102">A102</option>
			  <option value="A103">A103</option>
			  <option value="A104">A104</option> -->
			<?php
				}
			?> 
			</select>
			<br /><br />
			<div class="titulo-detalhes">Morador: </div> 
			<select class="inline">
			<option value=""></option>
			<?php
				$dataM=DBRead('Morador as m','','m.CodMorador,m.Nome');
				var_dump($dataM);
			  	foreach ($dataM as $res) {

			  ?>
			  <option value="echo $res['CodMorador']"><?php echo $res['Nome'];?></option>
			  
			<?php
				}
			?>  
			</select>
			<br /><br />
			<div class="titulo-detalhes">Permissão de acesso: </div> 
			<select class="inline">
			  <option value=""></option>
			  <option value="A102">Todos os horários</option>
			  <option value="A103">Horário comercial</option>
			  <option value="A104">Nenhum</option>
			</select>
			<br /><br />
			<div class="titulo-detalhes">Permissões: </div> 
			<select class="inline">
			  <option value=""></option>
			  <option value="1">Morador</option>
			  <option value="2">Administrador do apartamento</option>
			  <option value="3">Administrador do sistema</option>
			</select>
			<br /><br />
			  <FORM class="inline"><INPUT Type="button" class="botao-branco" VALUE="Voltar" onClick="history.go(-1);return true;"></FORM>
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
	          <button class="btn btn-default right-2" type="submit" data-dismiss="modal">Salvar</button>
	        </div>
	      </div>      
   		</div>
   	</div>
  </div>
<script>
jQuery(function($){
       $("#numeroTAG").mask("999.999.999");
});
</script>
</body>
</html>