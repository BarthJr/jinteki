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
<!--Cannot add or update a child row: a foreign key constraint fails (`Jinteki`.`TAG`, CONSTRAINT `fk_MoradorTAG` FOREIGN KEY (`CodMorador`) REFERENCES `Morador` (`CodMorador`)) -->
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
			  <option value="1">Ativo</option>
			  <option value="0">Inativo</option>
			</select>
			<br /><br />
			
			<div class="titulo-detalhes">Morador: </div> 
			<select name="cod_morador" class="inline">
			<option value="0"></option>
			<?php
				$dataM=DBRead('Morador as m','ORDER BY m.Nome','m.CPF,m.Nome');
			  	foreach ($dataM as $res) : var_dump($res);?>
			  		<option value="<?php echo $res['CPF'] ?> "><?php echo $res['Nome'];?></option>
			<?php endForEach; ?>  
			</select>
			<br /><br />
			<div class="titulo-detalhes">Permissão de acesso: </div>
				<div class="meio">	
					<h5>Em que dias da semana a TAG terá permissão de entrar no apartamento?</h5>
					<form action="">
						<input type="checkbox" name="diaSemana" value="segunda">Segunda-feira<br>
						<input type="checkbox" name="diaSemana" value="terca">Terça-feira<br>
						<input type="checkbox" name="diaSemana" value="quarta">Quarta-feira<br>
						<input type="checkbox" name="diaSemana" value="quinta">Quinta-feira<br>
						<input type="checkbox" name="diaSemana" value="sexta">Sexta-feira<br>
						<input type="checkbox" name="diaSemana" value="sabado">Sábado<br>
						<input type="checkbox" name="diaSemana" value="domingo">Domingo<br>
						<br><br>
						<div class="col-md-12">
							<p>A partir de que dia a TAG poderá entrar no apartamento?</p><br />
							<input type="date" name="inicioPermissao" />
						</div>

						<div class="col-md-12">
							<br><p>Até que dia a TAG poderá entrar no apartamento? </p><br />
							<input type="date" name="fimPermissao" />
						</div>

						
						<div class="col-md-12">
						<br>	<p>A partir de que horário a TAG poderá entrar no apartamento?</p><br />
							<input type="time" name="inicioHoraPermissao" />
						</div>

						<div class="col-md-12">
							<br><p>Até que horário a TAG poderá entrar no apartamento? </p><br />
							<input type="time" name="fimHoraPermissao" />
						</div>
					</form>
					.
				</div>

			<br /><br />
			<div class="titulo-detalhes">Permissões: </div> 

			<select name="perm" class="inline">
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
/*jQuery(function($){
       $("#numeroTAG").mask("999.999.999");
}); */
</script>
</body>
</html>