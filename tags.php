
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

			  <div class="col-md-4"><input type="number" name="tag" value='<?php if(!GetPost('clear')) echo GetPost('tag'); ?>' class="w3-input" /></div>
			  <div class="col-md-4"><input type="text" name="nome-cliente" value='<?php if(!GetPost('clear')) echo GetPost('nome-cliente'); ?>' class="w3-input" /></div>
			  <div class="col-md-4"><input type="text" name="apartamento" value='<?php if(!GetPost('clear')) echo GetPost('apartamento'); ?>' class="w3-input" /></div>
				
							  <div class="container col-md-12" style="visibility: hidden">.</div>

			  <p class="campo w3-third">Status:</p><p class="campo w3-third">Permissão:</p><p class="campo w3-third" style="visibility: hidden">.</p>
			  <br /><br>

			  <div class="col-md-4" style="display: block"><select><option></option><option>Ativo</option><option>Inativo</option></select></div>
			  <div class="col-md-4" style="display: block"><select><option></option><option>Morador</option><option>Administrador local</option><option>Administrador do sistema</option></select></div>
			  <div class="col-md-4" style="visibility: hidden; display: block">.</div>
			  
				<div class="container col-md-12" style="visibility: hidden">.</div>

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
			        <th>Último Acesso</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php 
			    	foreach ($data as $res) {
			    ?>
			      <tr>
			      	<td> <a href="<?php echo URL_DETALHES_TAG."?userkey=$res[NumTAG]" ?>" title="detalhes_tag"><?php echo $res['NumTAG']  ?></a>
			      	</td>
			      	<td> <a href="<?php echo URL_DETALHES_AP."?userkey=$res[NomeAP]" ?>" title="detalhes_ap"><?php echo $res['NomeAP']  ?></a>
			      	</td>
			      	<td> <a href="<?php echo URL_DETALHES_MORADOR."?userkey=$res[Nome]" ?>" title="detalhes_nome"><?php echo $res['Nome']  ?></a>
			      	</td>
			      	<td>ATIVO</td>
			      	<td>Morador</td>
			      	<td> <?php if($res['UltAcesso']) echo date("d/m/Y",$res['UltAcesso']);?> </td>
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