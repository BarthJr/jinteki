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