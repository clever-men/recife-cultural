	
$(document).ready(function() {
	//MODAL
	//$("#myModal").modal("show");

	//LISTA
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

	//LOCAL STORAGE
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

});