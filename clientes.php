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

	/*$query="WHERE a.CodAp = m.CodApartamento AND t.CodMorador = m.CodMorador";
	$query.= ($t) ? " AND NumTAG = '$t'" : '';
	$query.= ($nmMorador) ? " AND m.Nome = '$nmMorador'" : '';
	$query.= ($numAP) ? " AND NomeAP = '$numAP'" : ''; */
	//$query.="WHERE t.CodApartamento = a.CodAp AND a.CodAp = m.CodApartamento AND m.Nome = 'Junior Barth'";

	//$data=DBRead('TAG as t, Apartamento as a, Morador as m',$query,"t.NumTAG, a.NomeAP, m.Nome, t.UltAcesso");

	$dataUser = GetUser();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Moradores</title>
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
			<h3 class="titulo">Moradores</h3>

			<form id ="busca" class="w3-row-padding">
			  <p class="campo w3-third">TAG:</p><p class="campo w3-third">Nome do morador:</p><p class="campo w3-third ">Apartamento:</p>
			  <br />
			  <div class="w3-third"><input type="number" name="tag" class="w3-input" /></div>
			  <div class="w3-third"><input type="text" name="nome-cliente" class="w3-input" /></div>
			  <div class="w3-third"><input type="text" name="apartamento" class="w3-input campoAp" /></div>
			  <input type="submit" class="botao" value="Buscar">
			  <button form="busca" class="botao">Relatório</button>
			  <button form="busca" class="botao-branco" type="reset">Limpar</button>
			</form>
		
			<br />

			
				<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Nome</th>
			        <th>Apto.</th>
			        <th>CPF</th>
			        <th>Telefone</th>
			        <th>Email</th>
			        			        
			        
			        

			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	//$query"SELECT m.CodMorador FROM Morador as m"; 
			    	//$query="SELECT t.NumTag, a.NomeAp,m.Nome, m.CodMorador FROM TAG t LEFT JOIN Morador m ON t.CodMorador = m.CodMorador LEFT JOIN Apartamento a ON m.CodApartamento = a.CodAp ORDER BY t.NumTag";
			    	//$data1= DBRead1($query);
			    	$data1=DBRead("Morador as m, Apartamento as a",'WHERE m.CodApartamento = a.CodAp ORDER BY m.Nome','m.Nome, a.NomeAp, m.CPF, m.Email, m.CPF');
			    	//var_dump($data1);
			    	foreach ($data1 as $res) {

			    ?>
			      <tr>
			      <?php
			      	//$dados = DBRead("Morador as m, Telefone as tel, Apartamento as a","WHERE tel.CodMorador = '$res[CodMorador]' AND m.CodMorador = '$res[CodMorador] AND m.CodApartamento = a.CodAp' ORDER BY m.Nome LIMIT 1",'m.Nome, a.NomeAp, tel.NumTel, m.CPF, m.Email');


			      ?>
			      	<td> <a href="<?php echo URL_DETALHES_MORADOR."?userkey=$res[Nome]" ?>" title="detalhes_nome"><?php echo $res['Nome']  ?></a>
			      	</td>
			      	<td> <a href="<?php echo URL_DETALHES_AP."?userkey=$res[NomeAp]" ?>" title="detalhes_ap"><?php echo $res['NomeAp']  ?></a>
			      	</td>
			      	<td id="CPF"> 
			      		<?php echo $res['CPF']?>
			      	</td>
			      				      	
			      	<td class="campoTelefone"> <?php $dados = DBRead("Telefone as tel","WHERE tel.CodMorador = '$res[CPF]' ",'tel.NumTel'); echo $dados[0]['NumTel']; ?> </td>
			      	<td><?php echo $res['Email']?></td>

			      </tr>
			     <?php } ?>
			    </tbody>
			  </table>
			  <a class="botao" href="criar_cliente.php">Criar Morador</a>
			  <br /><br />
			
		</div>
	</div>


<script>
jQuery(function($){
       $(".campoTelefone").mask("(99) 9999-9999");
       $("#CPF").mask("999.999.999-99");
       $(".campoTag").mask("999.999.999");
       $(".campoAp").mask("a999");
});
</script>
	

</body>
</html>