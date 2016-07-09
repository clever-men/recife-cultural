<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	$cod_categorias = mysql_real_escape_string( $_REQUEST['cod_categorias'] );

	$categorias = array();
	
	if($cod_categorias == 1){
	
		//Setando o valor dos arrays
		
		$categoria = array('UCI Kinoplex Shopping Recife','Cinemark Riomar Recife','Cinépolis Shopping Guararapes');
		
		//Agora montar o foreach
	
		foreach ($categoria as $key=>$value) {
		
			 $categorias[] = array(
					'cod_local'	=> $key,
					'nome'			=> $value,
			);
		}
	
	}else if($cod_categorias == 2){
	
	//Setando o valor dos arrays
		
		$categoria = array('Pra de Boa Viagem, Recife','Praia do Pina, Recife','Praia de Piedade, Jaboatão dos Guararapes');
		
		//Agora montar o foreach
	
		foreach ($categoria as $key=>$value) {
		
			 $categorias[] = array(
					'cod_local'	=> $key,
					'nome'			=> $value,
			);
		}
	
		
	
	}else if($cod_categorias == 3){
	
	//Setando o valor dos arrays
		
		$categoria = array('Museo Brenand','Museo Da cidade','Museo da abolicao');
		
		//Agora montar o foreach
	
		foreach ($categoria as $key=>$value) {
		
			 $categorias[] = array(
					'cod_local'	=> $key,
					'nome'			=> $value,
			);
		}
	
		
	
	}else if($cod_categorias == 4){
	
	//Setando o valor dos arrays
		
		$categoria = array('Shopping Rio Mar Recife','Shopping Plaza Casa Forte','Shopping center recife','Shopping Tacaruna');
		
		//Agora montar o foreach
	
		foreach ($categoria as $key=>$value) {
		
			 $categorias[] = array(
					'cod_local'	=> $key,
					'nome'			=> $value,
			);
		}
	
		
	
	}
	

	echo( json_encode( $categorias ) );