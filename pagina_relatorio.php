<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Relatórios</title>
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
  <link rel="stylesheet" href="estilos/pagina_relatorio.css" /> 

</head>

<body>
  <div class="container">
    <div class="a4">
    <img src="imagens/logo2.jpg" class="icone"><p class="jinteki">Jinteki</p>
      <div class="risco risco2"></div>

      <h3 class="center">Relatório de movimentação</h3>
<?php $i=0; $j=0; ?>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nº</th>
              <th>Nome</th>
              <th>Apartamento</th>
              <th>Tag</th>
              <th colspan=2>Acesso</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $i++;
            echo "<tr>
              <td>" .$i . "</td>
              <td>Paulo Brandão</td>
              <td>A102</td>
              <td>603.409.257</td>
              <td>17/04/2015</td>
              <td>17:43</td>
            </tr>" ; 
            ?>



          </tbody>

            <tr>
              <td class="">Total de Acessos</td>
              <td class=""></td>
              <td class=""></td>
              <td class=""></td>
              <td class=""></td>
              <td class="">Até 22 linhas</td>
            </tr>

        </table>

        <div class="rodape">
          <div class="bottom-left">
            <p>Relatório gerado 23/04/2012, 23:32</p>
          </div>

          <div class="bottom-right">
            <p>Página 1 de 1</p>
          </div>
        </div>
    </div>
  </div>



</body>