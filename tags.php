
<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira
-->
<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/jinteki/system/system.php';
	//AcessPrivate();
	
	//$dataUser = GetUser();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - TAGs</title>
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
			<h3 class="titulo">TAGs</h3>
			<?php $data= Buscar() ?>
			<form id ="busca" class="w3-row-padding" action="" method="post" >
			  <p class="campo w3-third">TAG:</p><p class="campo w3-third">Nome do cliente:</p><p class="campo w3-third">Apartamento:</p>
			  <br />

			  <div class="w3-third"><input type="number" name="tag" value='<?php if(!GetPost('clear')) echo GetPost('tag'); ?>' class="w3-input" /></div>
			  <div class="w3-third"><input type="text" name="nome-cliente" value='<?php if(!GetPost('clear')) echo GetPost('nome-cliente'); ?>' class="w3-input" /></div>
			  <div class="w3-third"><input type="text" name="apartamento" value='<?php if(!GetPost('clear')) echo GetPost('apartamento'); ?>' class="w3-input" /></div>
			  <input type="submit" name="send" class="botao" value="Buscar">

			  <button form="busca" class="botao">Relatório</button>
			  <input form="busca" class="botao-branco" type="submit" name="clear" value="Limpar">
			  

			
		
			<br />
			
				<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>TAG</th>
			        <th>Apartamento</th>
			        <th>Nome</th>
			        <th>Status</th>
			        <th>Permissão</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$query="SELECT t.NumTag, a.NomeAp, m.Nome, t.Estado, t.CodPermissao FROM TAG t LEFT JOIN Morador m ON t.CodMorador = m.CodMorador LEFT JOIN Apartamento a ON m.CodApartamento = a.CodAp ORDER BY t.NumTag";
			    	$data1= DBRead1($query);
			    	foreach ($data1 as $res) {
			    ?>
			      <tr>
			      	<td> <a href="<?php echo URL_DETALHES_TAG."?userkey=$res[NumTag]" ?>" title="detalhes_tag"><?php echo $res['NumTag']  ?></a>
			      	</td>
			      	<td> <a href="<?php echo URL_DETALHES_AP."?userkey=$res[NomeAp]" ?>" title="detalhes_ap"><?php echo $res['NomeAp']  ?></a>
			      	</td>
			      	<td> <a href="<?php echo URL_DETALHES_MORADOR."?userkey=$res[Nome]" ?>" title="detalhes_nome"><?php echo $res['Nome']  ?></a>
			      	</td>
			      	<td><?php if($res['Estado'] == 1 ) echo "Ativo"; else echo "Inativo";  ?></td>
			      	<td><?php if($res['CodPermissao'] == 1 ) echo "Morador"; elseif($res['CodPermissao'] == 2 ) echo "Adm Ap"; else echo "Adm Sistema"   ?></td>
			      	
			      </tr>
			     <?php } ?>
			    </tbody>
			  </table>
			  <a class="botao" href="criar_tag.php">Criar TAG</a>
			  <br /><br />
			
		</div>
	</div>
	
</body>
</html>