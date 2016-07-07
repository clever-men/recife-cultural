<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta name="description" content="Recife Cultural">
    <meta name="author" content="Recife Cultural">
    <link rel="icon" href="img/favicon.ico">

    <title>Recife Cultural</title>

	<link rel="stylesheet" type="text/css" href="css/style.css"> 
  </head>

  <body>
    <div class="container">
      <div class="header clearfix">
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
				<input type="submit" class="btn btn-primary" onclick="getLocation()" id="btnEnviar" name="btnEnviar" value="Veja a rota" />
			</div>
		</form>
		<div id="trajeto-texto"></div>
		<div class="row">
			<div class="col-sm-8">
				<div id="map"></div>		
			</div>
			<div class="col-sm-4">
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>
						
    <!-- Modal -->
	<div class="modal" id="myModal" role="dialog">
		<div class="modal-dialog">
							
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn btn-primary close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Minha lista</h4>
				</div>
				<div class="modal-body">
					<ul id="minhalista"></ul>
				
					<button id="limpar" onClick="limpar();">Limpar</button>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>


      <footer class="footer">
      	<div class="container">
	        <p>&copy; 2016 Company, Inc.</p>  		
      	</div>
      </footer>

    </div> <!-- /container -->



	<script src="libs/jquery/dist/jquery.min.js"></script>
	<script src="libs/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
    <!-- Main file -->
	<script src="js/main.js"></script>
	<!-- Maps API Javascript -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCAn0cec2pUCiK4DfKr_wNxcs1sHfmyKA&callback=initMap"
        async defer></script>

    <!-- Arquivo de inicialização do mapa -->
	<script src="js/mapa.js"></script>
	
  </body>
</html>