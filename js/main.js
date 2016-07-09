	
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
						options += '<li><label for="' + j[i].codigo +'"><input type="radio" name="opcao" id="'+ j[i].codigo + '" class="item" onclick="passaValor(' +"'"+ j[i]
						.endereco +"'"+ ');addLista(' +"'"+ j[i].nome +"'"+ ');"  >' + j[i].nome + '</label></li>';
					}	
					$('#lista').html(options).show();
					$('.carregando').hide();
				});
			} else {
				$('#lista').html('<li>– Nenhum item encontrado –</li>');
			}
		});
	});
});

//LOCAL STORAGE
function limpar(){
	
	localStorage.clear();
	window.location = window.location;
}

function addLista(valor){

	 /* cria a variavel valor */	
	 localStorage.setItem(valor, valor);
	 
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
	
	/* separa o array por uma quebra de linha */
	var res = arrayValores.join("<br/>");
	
	/* exibe a lista  */
	$("#minhalista").html(res).show();
	 
	// usando o console do Chrome para verificar os arrays formados
	console.log(arrayChaves, arrayValores);
	
}