<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira

-->
<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/jinteki/system/system.php';
	//AcessPrivate();
	$key= $_GET['userkey'];
	$data= DBRead("TAG as t, Morador as m, Apartamento as a","WHERE t.CodMorador = m.CodMorador AND m.CodApartamento = a.CodAp AND t.NumTag = '$key'","t.Estado, a.NomeAp, m.Nome, t.CodPermissao");
	$dataAux= $data[0];
	

	//$dataUser = GetUser();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Alterar</title>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="center.js"></script>
  <link rel="stylesheet" type="text/css" href="signin.css" />
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
				<li><a href="clientes.html"">Clientes</a></li>
				<li><a href="apartamento.html">Apartamentos</a></li>
				<li><a href="#">Relatórios</a></li>
				<li><a href="#">Pendências</a></li>
				<li><a href="movimentacao.html">Movimentação</a></li>
				<li><a href="#"><img class="icon" src="profile.png" /></a></li>
				<li><a href="#"><img class="icon" src="sino.jpg" /></a></li>
				<li><a href="#"><img class="icon" src="sair.jpg" /></a></li>
			</ul>
		</div>
	</div>
	<br />

	<div class="risco"></div>

<?php ValidateFormUpdateAp(); ?>
<form action="" method="post">
	<div class="container">

		<h3 class="titulo"><a href="movimentacao.html">Home</a>><a href="tags.html">TAGs</a>><a class="active"><?php echo $key?></a></h3>

		<div class="meio">
			<div class="titulo-detalhes">Situação: </div> 
			<select class="inline">
			  <option value="1"
			  	<?php if($dataAux['Estado']==1)
			  		echo "selected='selected'";
			  	?>
			  >Ativo</option>
			  <option value="0"
			  	<?php if($dataAux['Estado']==0)
			  		echo "selected='selected'";
			  	?>
			  >Inativo</option>
			</select>
			<br /><br />
			<div class="titulo-detalhes">Apartamento: </div> 
			<select name= "Ap" class="inline">
			<?php
			  $dataAP=DBRead('Apartamento as a','','a.CodAp,a.NomeAp');
			  foreach ($dataAP as $res) {

			?>
			  <option value="echo $res['CodAp']"
			  	<?php if($dataAux['NomeAp'] == $res['NomeAp'])
			    		echo "selected='selected'"
			    	?>
			  > <?php echo $res['NomeAp'];?>	
			  </option>

			  <!--<option value="A102">A102</option>
			  <option value="A103">A103</option>
			  <option value="A104">A104</option> -->

			<?php
				}
			?>
			</select>
			<br /><br />
			<div class="titulo-detalhes">Morador: </div> 
			<select name= "dweller" class="inline">
			  <?php
				$dataM=DBRead('Morador as m','','m.CodMorador,m.Nome');
			  	foreach ($dataM as $res) {

			  ?>
			    <option value="echo $res['CodMorador']"
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
			<select class="inline">
			  <option value=""></option>
			  <option value="A102">Todos os horários</option>
			  <option value="A103">Horário comercial</option>
			  <option value="A104">Nenhum</option>
			</select>
			<br /><br />
			<div class="titulo-detalhes">Permissões: </div> 
			<select class="inline">
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
	          <button class="btn btn-default right-2" type="submit" value="Submit" name="send" data-dismiss="modal" >Salvar</button>
	        </div>
	      </div>      
   		</div>
   	</div>
  </div>

</body>
</html>