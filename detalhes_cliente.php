<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira

-->

<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/jinteki/system/system.php';
	//AcessPrivate();


	//$dataUser = GetUser();

	$key= $_GET['userkey'];
				$data=DBRead('TAG as t, Apartamento as a, Morador as m, Telefone as tel',"WHERE t.CodMorador = m.CodMorador AND m.CodApartamento = a.CodAp AND m.CodMorador = tel.CodMorador AND m.Nome = '$key'","a.NomeAp, t.NumTag, tel.NumTel, t.UltAcesso,t.CodAntigoM");
				$AuxData=$data[0];
				//var_dump($DataTel);
				
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Detalhes</title>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="signin.css" />
  <link rel="stylesheet" href="estilos/movimentacao.css" />
  <link rel="stylesheet" href="estilos/detalhes.css" />
</head>

<body>
	<div class="container topo">
		<div class="col-md-12 up">
			<img class="navbar-brand" src="imagens/logo2.jpg" />
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

	<div class="risco"></div>

	<div class="container">

		<h3 class="titulo"><a href="movimentacoes.php">Home</a>><a href="clientes.php">Clientes</a>><a class="active"><?php echo $key?></a></h3>

		<div class="meio">
			
			

			  <div class="titulo-detalhes">Apartamento: </div><a href="<?php echo URL_DETALHES_AP."?userkey=$AuxData[NomeAp]" ?>"><?php echo $AuxData['NomeAp']?></a> <br />

			  <div class="titulo-detalhes">TAGs: </div><a href="<?php echo URL_DETALHES_TAG."?userkey=$AuxData[NumTag]" ?>"<?php echo $data[0]['Nome']?>"><?php echo $data[0]['NumTag']?></a> <br />

			  <?php
			  	$DataTel=DBRead('Morador as m, Telefone as tel',"WHERE m.CodMorador = tel.CodMorador AND m.Nome = '$key' LIMIT 2","tel.NumTel");
			  	$count=1;
			  	foreach ($DataTel as $res) {
			  ?>

			  <div class="titulo-detalhes">Telefone <?php echo $count; ?>: </div> <p><?php echo $res['NumTel'];?></p><br />


			  <?php
		  	$count++;
				}
			  ?>

			  <div class="titulo-detalhes">Permissão de acesso: </div> <p>Todos os horários</p><br />

			  <div class="titulo-detalhes">Último acesso: </div> <p><?php echo date("d/m/Y",$data[0]['UltAcesso'])?></p><br />

			  <div class="titulo-detalhes">Último dono: </div> <a href="detalhes cliente.html"><?php echo $data[0]['CodAntigoM']?></a><br />
			  <br />
			  
			  <FORM class="inline"><INPUT Type="button" class="botao-branco" VALUE="Voltar" onClick="history.go(-1);return true;"></FORM>
			  <a class="botao" href="alterar_morador.php">Alterar</a>
			
		
			
			
		</div>
	</div>



	

</body>
</html>