
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
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="estilos/signin.css" />
  <link rel="stylesheet" href="estilos/movimentacao.css" />

</head>

<body>
	<div class="container topo">
		<div class="col-md-12 up">
			<img class="navbar-brand" src="imagens/logo2.jpg" />
			<p class="top-name">Jinteki</p>
			<ul  class="direita">
				<li><a href="#" class="active">TAGs</a></li>
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
			        <th colspan=2>Último Acesso</th>
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
			      	<td> <?php if($res['UltAcesso']) echo date("d/m/Y",$res['UltAcesso']);?> </td>
			      	<td> <?php if($res['UltAcesso']) echo date("H:i:s",$res['UltAcesso']);  ?> </td>
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