<!DOCTYPE html>
<html lang="pt-br" manifest="manifest.php">
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

  <body onLoad="desabilitaBotao(2);">
  	<span class="loader">
  		<span class="text">Carregando...</span>
  	</span>
  	<div id="app" class="main-container"> 		
		<header class="header clearfix">
			<div class="header-content">
			    <div class="container text-center">
					<h1 class="logo">
						<img src="img/logo-recife-cultural.svg" alt="Logo Recife Cultural">
						<span class="text">Recife cultural</span>
					</h1>
				</div>				
			</div>
		</header>

		<div id="offline-page">
			<div class="container text-center">
				<h2>Você está offline :(</h2>			
			</div>
		</div>
		<section id="corpo-app">
			<div class="">
				<div class="clearfix">
					<div class="section-fluid">
						<div class="col-md-6">
							<div class="app-content">
								<div id="site">
									<form id="form" class="form-select">
										<select name="cod_categorias" id="cod_categorias" class="select">
											<option value="">Escolha uma categoria</option>
											<option value="1">CINEMA</option>
											<option value="2">PRAIAS</option>
											<option value="3">MUSEUS</option>
											<option value="4">SHOPPINGS</option>
										</select>					
									</form>
									<ul id="lista" class="list-unstyled list-results"></ul>
									<form id="form-location" method="post" action="index.php">
										<div>
											<input type="hidden" id="txtEnderecoPartida" name="txtEnderecoPartida"  />
										</div>
										<div>
											<input type="hidden" id="txtEnderecoChegada" name="txtEnderecoChegada" />
										</div>
										<div class="botoes-de-funcoes">
											<p>Clique no botão para obter a sua posição.</p>
											<button type="submit" class="btn btn-laranja-claro" id="btnEnviar" name="btnEnviar">Veja a rota</button>
											<button class="btn btn-azul" onClick='listar();' data-toggle="modal" data-target="#myModal">Ver Trajetória</button>
											<button class="btn btn-roxo" onClick='listar();' data-toggle="modal" data-target="#myHistorico">Ver histórico</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-6 p0">
							<div id="mapa" class="map"></div>	
						</div>
					</div>
				</div>
			</div>

		</section>
						
	    <!-- Modal -->
		<div class="modal" id="myModal" role="dialog">
			<div class="modal-dialog">
								
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header bg-azul">
						<button type="button" class="btn close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Trajetória</h4>
					</div>
					<div class="modal-body">
						<div id="trajeto-texto"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-roxo" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal" id="myHistorico" role="dialog">
			<div class="modal-dialog">
								
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header bg-roxo">
						<button type="button" class="btn close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Histórico</h4>
					</div>
					<div class="modal-body">
						<ul id="minhalista"></ul>
					</div>
					<div class="modal-footer">
						<a onclick="enviaForm()" id="cmdContinuar" class="btn btn-laranja-claro" name="btnEnviar" data-dismiss="modal">Veja a rota</button>
						<a id="limpar" class="btn btn-azul" onClick="limpar();" data-dismiss="modal">Limpar</a>
						<button type="button" class="btn btn-roxo" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		<span class="hidden">
            <?php
                echo md5(rand(0,9999));
            ?>			
		</span>
	</div>


	<script src="libs/jquery/dist/jquery.min.js"></script>

    <script src="js/app-cache.js"></script>

	<script src="libs/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
    <!-- Main file -->
	<script src="js/main.js"></script>
	<!-- Maps API Javascript -->

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCAn0cec2pUCiK4DfKr_wNxcs1sHfmyKA"></script>

    <!-- Arquivo de inicialização do mapa -->
	<script src="js/mapa.js"></script>
	
  </body>
</html>