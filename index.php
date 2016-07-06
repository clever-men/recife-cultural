<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Recife Cultural">
    <meta name="author" content="Recife Cultural">
    <link rel="icon" href="img/favicon.ico">

    <title>Recife Cultural</title>

	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="header clearfix">
		<br>
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
			<li role="presentation"><a href="#" onClick='listar();' data-toggle="modal" data-target="#myModal">Minha Lista</a></li>
            <li role="presentation"><a href="#">Sobre</a></li>
            <li role="presentation"><a href="#">Contato</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Recife Cultural	</h3>
      </div>

      <div class="jumbotron">
        <h1>Escolha uma opção abaixo</h1>
        <p class="lead">Esse site contem vários pontos turísticos para que você possa visitar na veneza Brasileira.</p>
        <form id="form">
			<label for="cod_categorias">Categoria:</label>
			
			<select name="cod_categorias" id="cod_categorias">
				<option value="">-- Escolha uma categoria --</option>
				<option value="1">-- CINEMA --</option>
				<option value="2">-- PRAIAS --</option>
				<option value="3">-- MUSEUS --</option>
				<option value="4">-- SHOPPINGS --</option>
			</select>
		
		</form>
      </div>
	  <div class="jumbotron" >
		<ul id="lista" ></ul>
	  </div>
	
	 <div id="site">
		<form method="post" action="index.php">
			<div>
				<input type="hidden" id="txtEnderecoPartida" name="txtEnderecoPartida"  />
			</div>
			<div>
				<input type="hidden" id="txtEnderecoChegada" name="txtEnderecoChegada" />
			</div>
			<div>
				<p id="demo">Clique no botão para obter a sua posição.</p></br>
				<input type="submit" onclick="getLocation()" id="btnEnviar" name="btnEnviar" value="Veja a rota" />
			</div>
		</form>
		<div id="trajeto-texto"></div>
		<div id="mapa"></div>
		<div class="modal-footer">
		</div>
	</div>
						
    <!-- Modal -->
	<div class="modal" id="myModal" role="dialog">
		<div class="modal-dialog">
							
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Minha lista</h4>
				</div>
				<div class="modal-body">
					<ul id="minhalista"></ul>
				
					<button id="limpar" onClick="limpar();">Limpar</button>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#myModal").modal("show");
		});
	</script>   

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->
	<script src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">
		 google.load('jquery', '1.3');
	</script>		

	<script type="text/javascript">
		$(function(){
			$('#cod_categorias').change(function(){
				if( $(this).val() ) {
					$('#lista').hide();
					$('.carregando').show();
					$.getJSON('categorias.ajax.php?search=',{cod_categorias: $(this).val(), ajax: 'true'}, function(j){
						var options = '';	
						
						for (var i = 0; i < j.length; i++) {
							options += '<li><a href="#" id="item" onclick="passaValor(' +"'"+ j[i].nome +"'"+ ');addLista(' +"'"+ j[i].nome +"'"+ ');"  >' + j[i].nome + '</a></li>';
						}	
						$('#lista').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#lista').html('<li>– Nenhum item encontrado –</li>');
				}
			});
		});
		
	</script>
	<script type="text/javascript">
	function limpar(){
		localStorage.clear();
		window.location = window.location;
	}
	function addLista(valor){
	
		 localStorage.setItem(valor, valor);
		 
		 if (localStorage.getItem(valor)) {
			var dados = '<li>'+localStorage.getItem(valor)+'</li>';
			//$("#minhalista2").html(dados).show();
		  }
	}
	function listar(){
		// variáveis
		var i = 0,
		// instancia do objeto Storage
			local = localStorage,
		// array das chaves e dos seus valores
			arrayChaves = [],
			arrayValores = [],
		// tem o total de itens gravados
			total = local.length,
		// usadas no laço
			chave = '',
			valor = '';
		 
		while(i < total){
		// retorna a chave
			chave = local.key(i);
			// registra a chave
				arrayChaves[i] = chave;
		// retorna o valor
			valor = local.getItem(chave);
			// retorna o valor
			arrayValores[i] = valor;
		i++;
		}
		
		var res = arrayValores.join("<br/>");
		
		$("#minhalista").html(res).show();
		 
		// usando o console do Chrome para verificar os arrays formados
		console.log(arrayChaves, arrayValores);
		
	}
	</script>
	<script src="js/jquery.min.js"></script>
	<!-- Maps API Javascript -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
 
    <!-- Arquivo de inicialização do mapa -->
	<script src="js/mapa.js"></script>
	
  </body>
</html>