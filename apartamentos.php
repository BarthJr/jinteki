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

	$query="WHERE a.CodAp = m.CodApartamento AND t.CodMorador = m.CodMorador";
	$query.= ($t) ? " AND NumTAG = '$t'" : '';
	$query.= ($nmMorador) ? " AND m.Nome = '$nmMorador'" : '';
	$query.= ($numAP) ? " AND NomeAP = '$numAP'" : '';
	//$query.="WHERE t.CodApartamento = a.CodAp AND a.CodAp = m.CodApartamento AND m.Nome = 'Junior Barth'";

	$data=DBRead('TAG as t, Apartamento as a, Morador as m',$query,"t.NumTAG, a.NomeAP, m.Nome, t.UltAcesso");

	$dataUser = GetUser();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Apartamentos</title>
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
		<div class="meio">
			<h3 class="titulo">Apartamentos</h3>

			<form id ="busca" class="w3-row-padding">
			  <p class="campo w3-third">TAG:</p><p class="campo w3-third">Nome do cliente:</p><p class="campo w3-third">Apartamento:</p>
			  <br />
			  <div class="w3-third"><input type="number" name="tag" class="w3-input" /></div>
			  <div class="w3-third"><input type="text" name="nome-cliente" class="w3-input" /></div>
			  <div class="w3-third"><input type="text" name="apartamento" class="w3-input" /></div>
			  <input type="submit" class="botao" value="Buscar">
			  <button form="busca" class="botao">Relatório</button>
			  <button form="busca" class="botao-branco" type="reset">Limpar</button>
			</form>
		
			<br />
			
				<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Apartamento</th>
			        <th>Administrador</th>
			        <th>Tag Adm.</th>
			        <th>Nº moradores</th>
			        <th colspan=2>Último Acesso</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php 
			    	//var_dump($data);
			    	foreach ($data as $res) {

			    ?>
			      <tr>
			      	<td> <a href="<?php echo URL_DETALHES_AP."?userkey=$res[NomeAP]" ?>" title="detalhes_ap"><?php echo $res['NomeAP']  ?></a>
			      	</td>
					<td> <a href="<?php echo URL_DETALHES_MORADOR."?userkey=$res[Nome]" ?>" title="detalhes_nome"><?php echo $res['Nome']  ?></a>
			      	</td>
			      	<td> <a href="<?php echo URL_DETALHES_TAG."?userkey=$res[NumTAG]" ?>" title="detalhes_tag"><?php echo $res['NumTAG']  ?></a>
			      	</td>
			      	<td>4
			      	</td>
			      	
			      	<td> <?php if($res['UltAcesso']) echo date("d/m/Y",$res['UltAcesso']);?> </td>
			      	<td> <?php if($res['UltAcesso']) echo date("H:i:s",$res['UltAcesso']);  ?> </td>
			      </tr>
			     <?php } ?>
			    </tbody>
			  </table>

			  <a class="botao" href="criar_ap.php">Criar Apartamento</a>
			  <br /><br />
			
		</div>
	</div>



	

</body>
</html>