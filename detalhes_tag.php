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
				$data=DBRead('TAG as t, Apartamento as a, Morador as m',"WHERE t.CodMorador = m.CodMorador AND m.CodApartamento = a.CodAp AND t.NumTag = '$key'","t.Estado, a.NomeAp, m.Nome, t.UltAcesso, t.CodAntigoM");
				$AuxData=$data[0];
				$data1=DBRead('TAG as t, Morador as m',"WHERE t.CodAntigoM = m.CodMorador","m.Nome");
				$AntigoM=$data1[0];


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
		<h3 class="titulo"><a href="movimentacoes.php">Home</a>><a href="tags.php">Tags</a>><a class="active"><?php echo $key?></a></h3>

		<div class="meio">
			
			  <div class="titulo-detalhes">Situação: </div> <p><?php echo $data[0]['Estado']?></p> <br />

			  <div class="titulo-detalhes">Apartamento: </div><a href="<?php echo URL_DETALHES_AP."?userkey=$AuxData[NomeAp]" ?>"><?php echo $data[0]['NomeAp']?></a> <br />

			  <div class="titulo-detalhes">Cliente: </div> <a href="<?php echo URL_DETALHES_MORADOR."?userkey=$AuxData[Nome]" ?>"><?php echo $data[0]['Nome']?></a><br />

			  <div class="titulo-detalhes">Permissão de acesso: </div> <p>Todos os horários</p><br />

			  <div class="titulo-detalhes">Último acesso: </div> <p><?php if($data[0]['UltAcesso']) echo date("d/m/Y",$data[0]['UltAcesso']);?></p><br />

			  <div class="titulo-detalhes">Último dono: </div> <a href="<?php echo URL_DETALHES_MORADOR."?userkey=$AntigoM" ?>"><?php echo $data[0]['CodAntigoM']?></a><br />
			  <br />
			
			  
			  
			  <FORM class="inline"><INPUT Type="button" class="botao-branco" VALUE="Voltar" onClick="history.go(-1);return true;"></FORM>
			  <a class="botao" href="<?php echo "alterar_tag.php?userkey=$key" ?>">Alterar</a>
			
		
			
			
		</div>
	</div>



	

</body>
</html>