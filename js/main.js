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
						.endereco +"'"+ ');addLista(' +"'"+ j[i].nome +"'"+ ',' +"'"+ j[i].endereco +"'"+ ');"  >' + j[i].nome + '</label></li>';
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

function addLista(valor,endereco){

	 /* cria a variavel valor */	
	 localStorage.setItem(valor, endereco);
	 
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

		item = '<input type="radio" name="historico" id="historico" onclick="passaValor(\''+valor+'\');desabilitaBotao(1)" />&nbsp;'+chave+'</br>';

		// retorna o valor
		arrayValores[i] = item;

	i++;
	}
	
	/* separa o array por uma quebra de linha */
	//var res = arrayValores.join("<br/>");
	
	/* exibe a lista  */
	$("#minhalista").html(arrayValores).show();
	 
	// usando o console do Chrome para verificar os arrays formados
	console.log(arrayChaves, arrayValores);
	
}

function desabilitaBotao(op){
	
	if (op == 1) 
	{
		document.getElementById("cmdContinuar").disabled = false; //Habilitando
		//document.getElementById('cmdContinuar').style.display="block";
				
	}
	else if (op == 2)
	{
		document.getElementById("cmdContinuar").disabled = true; //Desabilitando 
		//document.getElementById('cmdContinuar').style.display="none";
	}
}