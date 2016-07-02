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

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  </head>

  <body>
    <div class="container">
      <div class="header clearfix">
		<br>
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
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

      <div class="row marketing">
        <div class="col-lg-6">
         
        </div>

        <div class="col-lg-6">
          
        </div>
      </div>

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
							options += '<li>' + j[i].nome + '</li>';
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
  </body>
</html>