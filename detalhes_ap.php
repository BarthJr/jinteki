<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira

-->
<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/jinteki/system/system.php';
	//AcessPrivate();

	//$t="123456789";
	//$nmMorador='Junior Barth';
	//$numAP="A002";

	$key= $_GET['userkey'];
	//var_dump($key);
	//$query.="WHERE t.CodApartamento = a.CodAp AND a.CodAp = m.CodApartamento AND m.Nome = 'Junior Barth'";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Detalhes</title>
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

	<div class="container">

		<h3 class="titulo"><a href="movimentacoes.php">Home</a>><a href="apartamentos.php">Apartamentos</a>><a class="active"><?php echo $key;?></a></h3>

		<div class="meio">
			
			
			  <div class="titulo-detalhes">Moradores: </div> <br />

			  <p>
			  	<?php
				$dataM=DBRead('Morador as m, Apartamento as a',"WHERE m.CodApartamento = a.CodAp AND a.NomeAp = '$key'",'m.Nome');
			  	foreach ($dataM as $res) {
			  	?>
			  	

			  	<a href="<?php echo URL_DETALHES_MORADOR."?userkey=$res[Nome]" ?>"><?php echo $res['Nome'];?></a><br />
			  	

			  	<?php
					}
			  	?>
			  </p> <br />

			  <div class="titulo-detalhes">TAGs: </div> <br />

			  <p>
			  <?php
				$dataM=DBRead('TAG as t, Morador as m, Apartamento as a',"WHERE t.CodMorador = m.CodMorador AND m.CodApartamento = a.CodAp AND a.NomeAp = '$key'",'t.NumTAG');
			  	foreach ($dataM as $res) {
			  ?>
			  	<a href="<?php echo URL_DETALHES_TAG."?userkey=$res[NumTAG]" ?>"><?php echo $res['NumTAG'];?></a><br />
			  	<?php
					}
			  	?>
			  </p> <br />
			  <div class="titulo-detalhes">Administrador: </div> <br />

			  <p>
			  	<a href="detalhes cliente.html">Bruno Dias</a><br />
			  </p> <br />
			  <br />
			  
			  <FORM class="inline"><INPUT Type="button" class="botao-branco" VALUE="Voltar" onClick="history.go(-1);return true;"></FORM>
			  <a class="botao" href="alterar_ap.php">Alterar</a>
			
		
			
			
		</div>
	</div>



	

</body>
</html>