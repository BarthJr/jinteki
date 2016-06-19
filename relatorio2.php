
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
	<title>Jinteki - Relatírios</title>
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
  <link rel="stylesheet" href="estilos/esconder.css" /> 


<script>
$(document).ready(function(){
    $("#plus").click(function(){
        $(".hide-show-mov").toggle();
    });
});

$(document).ready(function(){
    $("#plusCli").click(function(){
        $(".hide-show-cli").toggle();
    });
});

$(document).ready(function(){
    $("#plusAp").click(function(){
        $(".hide-show-ap").toggle();
    });
});

$(document).ready(function(){
    $("#plusTag").click(function(){
        $(".hide-show-tag").toggle();
    });
});
</script>

</head>

<body>

	<iframe src="navbar.php" style=" margin-top: 10px; border: none; height: 70px; width: 100%"></iframe>

		<div class="container">
			<h3 class="titulo"><a href="movimentacao.html">Home</a>><a class="active">Relatórios</a></h3>

      <div class="meio">
          <input type="checkbox" id="plus" />
          <label for="plus" class="mov"></label>
          <div class="hide-show hide-show-mov">
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
              
              <input type="submit" class="botao" value="Gerar" />
              <button form="busca" class="botao-branco" type="reset">Limpar</button>
              
            </form>
          </div>

          <input type="checkbox" id="plusTag" />
            <label for="plusTag" class="taag"></label>
            <div class="hide-show hide-show-tag">
                    <form id ="buscaTag" class="w3-row-padding" action="" method="post" >
                      <p class="campo w3-third">TAG:</p><p class="campo w3-third">Nome do cliente:</p><p class="campo w3-third">Apartamento:</p>
                      <br />

                      <div class="w3-third"><input class="w3-input campoTag" type="text" name="tag" value='<?php if(!GetPost('clear')) echo GetPost('tag'); ?>' class="w3-input" /></div>
                      <div class="w3-third"><input type="text" name="nome-cliente" value='<?php if(!GetPost('clear')) echo GetPost('nome-cliente'); ?>' class="w3-input" /></div>
                      <div class="w3-third"><input class="w3-input campoAp" type="text" name="apartamento" value='<?php if(!GetPost('clear')) echo GetPost('apartamento'); ?>' class="w3-input" /></div>
                      <input type="submit" name="send" class="botao" value="Gerar">

                      <button form="buscaTag" class="botao-branco" type="reset">Limpar</button>
                    </form>
            </div>

            <input type="checkbox" id="plusCli" />
            <label for="plusCli" class="cli"></label>
            <div class="hide-show hide-show-cli">
                    <form id ="buscaCli" class="w3-row-padding">
                      <p class="campo w3-third">TAG:</p><p class="campo w3-third">Nome do cliente:</p><p class="campo w3-third ">Apartamento:</p>
                      <br />
                      <div class="w3-third"><input type="text" name="tag" class="w3-input campoTag" /></div>
                      <div class="w3-third"><input type="text" name="nome-cliente" class="w3-input" /></div>
                      <div class="w3-third"><input type="text" name="apartamento" class="w3-input campoAp" /></div>
                      <input type="submit" name="send" class="botao" value="Gerar">

                      <button form="buscaCli" class="botao-branco" type="reset">Limpar</button>
                    </form>
            </div>

            <input type="checkbox" id="plusAp" />
            <label for="plusAp" class="App"></label>
            <div class="hide-show hide-show-ap">
                    <form id ="buscaAp" class="w3-row-padding">
                      <p class="campo w3-third">TAG:</p><p class="campo w3-third">Nome do cliente:</p><p class="campo w3-third">Apartamento:</p>
                      <br />
                      <div class="w3-third"><input type="text" name="tag" class="w3-input campoTag" /></div>
                      <div class="w3-third"><input type="text" name="nome-cliente" class="w3-input" /></div>
                      <div class="w3-third"><input type="text" name="apartamento" class="w3-input campoAp" /></div>
                      <input type="submit" name="send" class="botao" value="Gerar">

                      <button form="buscaAp" class="botao-branco" type="reset">Limpar</button>
                    </form>
            </div>


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