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

	$query="WHERE a.CodAp = m.CodApartamento AND t.CodMorador = m.CPF AND t.NumTAG = h.NumTAG ORDER BY h.DtEntrada,h.HrEntrada";
	$query.= ($t) ? " AND NumTAG = '$t'" : '';
	$query.= ($nmMorador) ? " AND m.Nome = '$nmMorador'" : '';
	$query.= ($numAP) ? " AND NomeAP = '$numAP'" : '';
	//$query.="WHERE t.CodApartamento = a.CodAp AND a.CodAp = m.CodApartamento AND m.Nome = 'Junior Barth'";

	$data=DBRead('TAG as t, Apartamento as a, Morador as m, Historico as h',$query,"t.NumTAG, a.NomeAP, m.Nome, h.DtEntrada, h.HrEntrada");
	
	$dataUser = GetUser();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Movimentação</title>
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
			<h3 class="titulo">Movimentação</h3>

			<form id ="busca" class="w3-row-padding">
			  <p class="campo col-md-4">Nome:</p><p class="campo col-md-4">Nº da TAG:</p><p class="campo col-md-4">Apartamento:</p>
			  <br />
			  
				  <div class="col-md-4"><input type="text" name="nome" class="w3-input" /></div>
				  <div class="col-md-4"><input type="text" name="tag" class="w3-input campoTag" /></div>
				  <div class="col-md-4"><input type="text" name="partamento" class="w3-input campoAp" /></div>
			  
			  <br />
			  <div class="container col-md-12" style="visibility: hidden">.</div>
			  <p class="campo col-md-6">Horário do último acesso entre:</p>
			  <p class="campo col-md-6">Dia do último acesso entre:</p>
			  <br />
			  
			  <div class="col-md-3"><input type="time" name="tempoMenor" class=""></div>
			  <div class="col-md-3"><input type="time" name="tempoMaior" class=""></div>
			  <div class="col-md-3"><input type="date" name="diaMenor" class=""></div>
			  <div class="col-md-3"><input type="date" name="diaMaior" class=""></div>
		  		
			  <br>
			  
			  <input type="submit" class="botao" value="Buscar">
			  <button form="busca" class="botao">Relatório</button>
			  <button form="busca" class="botao-branco" type="reset">Limpar</button>
			  
			</form>
		
			<br />
			
				<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>TAG</th>
			        <th>Apartamento</th>
			        <th>Nome</th>
			        <th colspan=2>Último Acesso</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php 
			    	//var_dump($data);
			    	foreach ($data as $res) {

			    ?>
			      <tr>
			      	<td> <a href="<?php echo URL_DETALHES_TAG."?userkey=$res[NumTAG]" ?>" title="detalhes_tag"><?php echo $res['NumTAG']  ?></a>
			      	</td>
			      	<td> <a href="<?php echo URL_DETALHES_AP."?userkey=$res[NomeAP]" ?>" title="detalhes_ap"><?php echo $res['NomeAP']  ?></a>
			      	</td>
			      	<td> <a href="<?php echo URL_DETALHES_MORADOR."?userkey=$res[Nome]" ?>" title="detalhes_nome"><?php echo $res['Nome']  ?></a>
			      	</td>
			      	<td> <?php if($res['DtEntrada']) echo date_format(new DateTime($res['DtEntrada']), "d/m/Y");?> </td>
			      	<td> <?php if($res['HrEntrada']) echo date_format(new DateTime($res['HrEntrada']), "H:i:s");?> </td>
			      </tr>
			     <?php } ?>
			    </tbody>
			  </table>
			
		</div>
	</div>

<script>
jQuery(function($){
       $(".campoTag").mask("999.999.999");
       $(".campoAp").mask("a999");
});

</script>

	

</body>
</html>