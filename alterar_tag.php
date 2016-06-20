<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira

-->
<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/jinteki/system/system.php';
	//AcessPrivate();
	$key= $_GET['userkey'];
	$data= DBRead("TAG as t, Morador as m, Apartamento as a","WHERE t.CodMorador = m.CPF AND m.CodApartamento = a.CodAp AND t.NumTag = '$key' ORDER BY m.Nome","t.Estado, a.NomeAp, m.Nome, t.CodPermissao");
	$dataAux= $data[0];
	

	//$dataUser = GetUser();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Alterar</title>
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

<?php UpdateFormTag();?>
<form action="alterar_tag.php" method="post" id="envio">
	<input type="hidden" name="tag" value="<?php echo $_GET['userkey'] ?>" >
	<div class="container">

		<h3 class="titulo"><a href="movimentacoes.php">Home</a>><a href="tags.php">TAGs</a>><a class="active"><?php echo $key?></a></h3>

		<div class="meio">
			<div class="titulo-detalhes">Situação: </div> 
			<select name="estado" class="inline">
			  <option value="1"
			  	<?php if($dataAux['Estado']==1)
			  		echo "selected='selected'";
			  	?>
			  >Ativa</option>
			  <option value="0"
			  	<?php if($dataAux['Estado']==0)
			  		echo "selected='selected'";
			  	?>
			  >Inativa</option>
			</select>
			
	
			<br /><br />
			<div class="titulo-detalhes">Morador: </div> 
			<select name= "morador" class="inline">
				<option value=""></option>
			  <?php
				$dataM=DBRead('Morador as m','','m.CPF,m.Nome');
			  	foreach ($dataM as $res) {

			  ?>	
			    <option value="<?php echo $res['CPF'] ?>"
			    	<?php if($dataAux['Nome'] == $res['Nome'])
			    		echo "selected='selected'"
			    	?>
			    > <?php echo $res['Nome'];?>
			    </option>
			  <!--<option value="A102">Bruno Dias</option>
			  <option value="A103">Alfonso Romelho</option>
			  <option value="A104">Chica da Silva</option> -->
			  <?php
				}
			  ?>
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
			<div class="titulo-detalhes">Nivel de acesso: </div> 
			<select name="perm" class="inline">
			  <option value="1"
			  	<?php if($dataAux['CodPermissao']==1)
			  		echo "selected='selected'";
			  	?>
			  >Morador</option>
			  <option value="2"
			  	<?php if($dataAux['CodPermissao']==2)
			  		echo "selected='selected'";
			  	?>
			  >Administrador do apartamento</option>
			  <option value="3"	
			  	<?php if($dataAux['CodPermissao']==3)
			  		echo "selected='selected'";
			  	?>
			  >Administrador do sistema</option>
			</select>
			<br /><br />
			  <FORM class="inline"><INPUT Type="button" class="botao-branco" VALUE="Voltar" onClick="history.go(-1);return true;"></FORM>
			  <a type="button" class="botao" data-toggle="modal" data-target="#modalAlterar">Alterar</a>
		</div>
	</div>



		<!-- Modal -->
	  <div class="modal fade" id="modalAlterar" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Confirmar Alteração</h4>
	        </div>
	        <div class="modal-body">
	          <p class="vertical-center">Tem certeza que deseja alterar as alterações feitas em <a class="limpo" href="<?php echo URL_DETALHES_TAG."?userkey=$key" ?>" target="_blank"><?php echo $key?></a>?</p>
	          <button type="button" class="btn btn-default left-2" data-dismiss="modal">Cancelar</button>
	          <input class="btn btn-default right-2" type="submit" form="envio" name="send" value="Salvar"></input>
	        </div>
	      </div>      
   		</div>
   	</div>
  </div>

</body>
</html>