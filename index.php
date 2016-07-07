﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
    <title>Recife Cultural</title>
    <meta name="description" content="Recife Cultural">
    <meta name="author" content="Recife Cultural">
	
	<link href="https://fonts.googleapis.com/css?family=Capriola|Maven+Pro:400,500,700" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	
	<link type="image/x-icon" rel="shortcut icon" href="img/favicon.ico" />

  </head>

  <body>
  	<div class="main-container">  		
		<header class="header clearfix">
			<div class="header-content">
			    <div class="container text-center">
					<h1 class="logo">
						<img src="img/logo-recife-cultural.png" alt="Logo Recife Cultural">
						<span class="text">Recife cultural</span>
					</h1>
					<!-- <nav>
					<button class="nav-button">
						<span class="line line-1"></span>
						<span class="line line-2"></span>
						<span class="line line-3"></span>
					</button>
					<ul class="nav nav-pills pull-right">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#" onClick='listar();' data-toggle="modal" data-target="#myModal">Minha Lista</a></li>
						<li><a href="#">Sobre</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
				</nav> -->
				</div>				
			</div>
			<div class="label-main">
				<div class="container">
					<h2 class="title title-main">Escolha um destino Cultural</h2>
				</div>
			</div>
		</header>
		<div class="app-content">
			<form id="form" class="form-select">
				<div class="container">
					<select name="cod_categorias" id="cod_categorias" class="select">
						<option value="">-- Escolha uma categoria --</option>
						<option value="1">-- CINEMA --</option>
						<option value="2">-- PRAIAS --</option>
						<option value="3">-- MUSEUS --</option>
						<option value="4">-- SHOPPINGS --</option>
					</select>					
				</div>
			</form>
			<div id="map" class="map"></div>
			<div class="jumbotron">
				<ul id="lista" class="list-results"></ul>
			</div>
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
	</div>




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