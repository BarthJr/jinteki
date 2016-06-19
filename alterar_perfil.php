<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Perfil</title>
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
			<h3 class="titulo"><a href="movimentacao.html">Home</a>><a class="active">Perfil</a></h3>

			<div class="meio">

        <div class="titulo-detalhes">Nome Completo: </div> 
        <input class="w3-input inline" style="width:130px" type="text" name="telefone1" value="João da Silva">
      <br />
        <div class="titulo-detalhes">Telefone 1: </div> 
          <input class="w3-input inline campoTelefone" style="width:130px" type="text" name="telefone1" value="4132345660">
        <br />

        <div class="titulo-detalhes">Telefone 2: </div> 
          <input class="w3-input inline campoTelefone" style="width:130px" type="text" name= "telefone2" value="">
        <br />

        <div class="titulo-detalhes">Email: </div> 
          <input class="w3-input inline" style="width:230px" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="bruno.dias@email.com">
        <br />

        <div class="titulo-detalhes">RG: </div> 
          <input class="w3-input inline" style="width:110px"  type="text" name= "rg" id="RG" value="114693686">
        <br />

        <div class="titulo-detalhes">CPF: </div> 
          <input class="w3-input inline" style="width:120px"  type="text" name= "cpf" id="CPF" value="55149464953">
        <br /><br />
          <a class="botao" href="#p">Salvar</a>
      </div>

    </div>
<script>
jQuery(function($){
       $(".campoTelefone").mask("(99) 9999-9999");
       $("#CPF").mask("999.999.999-99");
});
</script>
  </body>

</html>