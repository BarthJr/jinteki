<!--
	Autores:João Moacir Barth Junior
			Alan Palomero Machado
			Cynthia Rocha Oliveira

-->
<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/jinteki/system/system.php';
	//AcessPrivate();
	$key= $_GET['userkey'];
	

	//$dataUser = GetUser();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jinteki - Alterar Apartamento</title>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="scripts/center.js"></script>
  <script src="scripts/jquery.maskedinput.min.js"></script>
  <link rel="stylesheet" type="text/css" href="estilos/signin.css" />
  <link rel="stylesheet" href="estilos/movimentacao.css" />
  <link rel="stylesheet" href="estilos/detalhes.css" />
  
</head>

<body>

	<iframe src="navbar.php" style=" margin-top: 10px; border: none; height: 70px; width: 100%"></iframe>

	<div class="container">

		<h3 class="titulo"><a href="movimentacao.html">Home</a>><a class="active">A102</a></h3>

		<div class="meio">
			
			
			  <div class="titulo-detalhes">Moradores: </div> <br />

			    <div class="container">
					<div class="row">
				        <div class="control-group" id="fields">
				            <div class="controls"> 
				                <form role="form" autocomplete="off">
				                    <div class="entry input-group col-xs-3">
				                        <input class="form-control" name="fields[]" type="text" Value="Bruno Dias" />
				                    	<span class="input-group-btn">
				                            <button class="btn btn-danger btn-remove" type="button">
				                                <span class="glyphicon glyphicon-minus"></span>
				                            </button>
				                        </span>
				                        <br />  
				                    </div>
				                    <div class="entry input-group col-xs-3">
				                        <input class="form-control" name="fields[]" type="text" Value="Alfonso Romelho" />
				                    	<span class="input-group-btn">
				                            <button class="btn btn-danger btn-remove" type="button">
				                                <span class="glyphicon glyphicon-minus"></span>
				                            </button>
				                        </span>
				                        <br /> 
				                    </div>
				                    <div class="entry input-group col-xs-3">
				                        <input class="form-control" name="fields[]" type="text" placeholder="Adicionar Morador" />
				                    	<span class="input-group-btn">
				                            <button class="btn btn-success btn-add" type="button">
				                                <span class="glyphicon glyphicon-plus"></span>
				                            </button>
				                        </span>
				                    </div>
				                </form>
				            <br>
				            </div>
				        </div>
					</div>
				</div>

			

			  <div class="titulo-detalhes">TAGs: </div> <br />

			    <div class="container">
					<div class="row">
				        <div class="control-group" id="fields">
				            <div class="controls-tag"> 
				                <form role="form" autocomplete="off">
				                    <div class="entry input-group col-xs-3">
				                        <input class="form-control campoTag" name="fields[]" type="text" Value="717239654" />
				                    	<span class="input-group-btn">
				                            <button class="btn btn-danger btn-remove" type="button">
				                                <span class="glyphicon glyphicon-minus"></span>
				                            </button>
				                        </span>
				                        <br />  
				                    </div>
				                    <div class="entry input-group col-xs-3">
				                        <input class="form-control campoTag" name="fields[]" type="text" Value="083654946" />
				                    	<span class="input-group-btn">
				                            <button class="btn btn-danger btn-remove" type="button">
				                                <span class="glyphicon glyphicon-minus"></span>
				                            </button>
				                        </span>
				                        <br /> 
				                    </div>
				                    <div class="entry input-group col-xs-3">
				                        <input class="form-control" name="fields[]" type="text" placeholder="Adicionar TAG" />
				                    	<span class="input-group-btn">
				                            <button class="btn btn-success btn-add-tag" type="button">
				                                <span class="glyphicon glyphicon-plus"></span>
				                            </button>
				                        </span>
				                    </div>
				                </form>
				            <br>
				            </div>
				        </div>
					</div>
				</div>
			  <div class="titulo-detalhes">Administrador: </div> <br />

			    <select>
				  <option value="Bruno Dias">Bruno Dias</option>
				  <option value="Alfonso Romelho">Alfonso Romelho</option>
				</select>
			  <br />
			  
			  <FORM class="inline"><INPUT Type="button" class="botao-branco" VALUE="Voltar" onClick="history.go(-1);return true;"></FORM>
			  <a type="button" class="botao" data-toggle="modal" data-target="#modalAlterar">Alterar</a>
		</div>
	</div>

		<!-- Modal -->
	  <div class="modal fade" id="modalAlterar" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Confirmar Alteração</h4>
	        </div>
	        <div class="modal-body">
	          <p class="vertical-center">Tem certeza que deseja alterar as alterações feitas em <a class="limpo" href="detalhes ap.html" target="_blank">A102</a>?</p>
	          <button type="button" class="btn btn-default left-2" data-dismiss="modal">Cancelar</button>
	          <button class="btn btn-default right-2" type="submit">Salvar</button>
	        </div>
	      </div>      
   		</div>
   	</div>

<script>
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});
</script>

<script>
$(function()
{
    $(document).on('click', '.btn-add-tag', function(et)
    {
        et.preventDefault();

        var controlForm = $('.controls-tag form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add-tag')
            .removeClass('btn-add-tag').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(et)
    {
		$(this).parents('.entry:first').remove();

		et.preventDefault();
		return false;
	});
});
</script>

<script>
jQuery(function($){
       $(".campoTelefone").mask("(99) 9999-9999");
       $("#CPF").mask("999.999.999-99");
       $(".campoTag").mask("999.999.999");
});
</script>

</body>
</html>