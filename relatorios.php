<!DOCTYPE html>
<html>
<head>
  <title>Jinteki</title>
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
  <link href='https://fonts.googleapis.com/css?family=Passion+One:400,900' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
	<div class="meio" style="width: 210mm; height: 297mm">

			<form id ="busca" class="w3-row-padding">
			  <p class="campo col-md-4">Nome:</p><p class="campo col-md-4">Nº da TAG:</p><p class="campo col-md-4">Apartamento:</p>
			  <br />
			  
				  <div class="col-md-4"><input type="text" name="nome" class="w3-input" /></div>
				  <div class="col-md-4"><input type="number" name="tag" class="w3-input" /></div>
				  <div class="col-md-4"><input type="text" name="partamento" class="w3-input" /></div>
			  
			  <br />
			  <div class="container col-md-12" style="visibility: hidden">.</div>
			  <p class="campo col-md-6">Dia do último acesso acesso entre:</p>
			  <p class="campo col-md-6">Horário do último acesso acesso entre:</p>
			  <br />
			  
			  <div class="col-md-3"><input type="time" name="tempoMenor" class=""></div>
			  <div class="col-md-3"><input type="time" name="tempoMaior" class=""></div>
			  <div class="col-md-3"><input type="date" name="diaMenor" class=""></div>
			  <div class="col-md-3"><input type="date" name="diaMaior" class=""></div>
		  		
			  <br>
			  
			  <input type="submit" class="botao" value="Gerar">
			  <button form="busca" class="botao-branco" type="reset">Limpar</button>
			  
			</form>
		
			<br />
			
				<table class="table table-striped">
			    <thead>
			      <tr>
			      	<th></th>
			        <th>Nome</th>
			        <th>Apartamento</th>
			        <th>Tag</th>
			        <th colspan=2>Último Acesso</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      	<td></td>
			        <td class=""><a href="detalhes cliente.html">Paulo Brandão</a></td>
			        <td class=""><a href="detalhes ap.html">A102</a></td>
			        <td class=""><a href="detalhes tag.html">603.409.257</a></td>
			        <td class="">17/04/2015</td>
			        <td class="">17:43</td>
			      </tr>
			      <tr>
			   		<td></td>
			        <td class=""><a href="detalhes cliente.html">Paulo Brandão</a></td>
			        <td class=""><a href="detalhes ap.html">A102</a></td>
			        <td class=""><a href="detalhes tag.html">603.409.257</a></td>
			        <td class="">17/04/2015</td>
			        <td class="">17:43</td>
			      </tr>
			      <tr>
			        
			        <td></td><td class=""><a href="detalhes cliente.html">Paulo Brandão</a></td>
			        <td class=""><a href="detalhes ap.html">A102</a></td>
			        <td class=""><a href="detalhes tag.html">603.409.257</a></td>
			        <td class="">17/04/2015</td>
			        <td class="">17:43</td>
			      </tr>
				  <tr>
			        <td class="">Total</td>
			        <td class=""></td>
			        <td class=""></td>
			        <td class=""></td>
			        <td class=""></td>
			      </tr>

			    </tbody>
			  </table>
			
		</div>
	</div>

</body>