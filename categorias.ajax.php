<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	$cod_categorias = mysql_real_escape_string( $_REQUEST['cod_categorias'] );

	$categorias = array();
	
	if($cod_categorias == 1){
	
		//Setando o valor dos arrays
		
		$categoria = array('Uci Kinoplex - Travessa Padre Carapuceiro, 777 - Boa Viagem, Recife - PE, 51020-280','Cinemark - Avenida República do Líbano, 251 - Pina, Recife - PE, 51110-160','Cinépolis - Shopping Guararapes - Avenida Barreto de Menezes, 800 - Piedade, Jaboatão dos Guararapes - PE, 54325-000');
		
		//Agora montar o foreach
	
		foreach ($categoria as $key=>$value) {
		
			 $categorias[] = array(
					'cod_local'	=> $key,
					'nome'			=> $value,
			);
		}
	
	}else if($cod_categorias == 2){
	
	//Setando o valor dos arrays
		
		$categoria = array('Hotel Boa Viagem Praia - Avenida Boa Viagem, 5576 - Boa Viagem, Recife - PE, 51030-000','Praia do Pina (Praia do Sport) - 482, Avenida Boa Viagem, 480 - Boa Viagem, Recife - PE','Praia de Piedade - Piedade, Jaboatão dos Guararapes - PE');
		
		//Agora montar o foreach
	
		foreach ($categoria as $key=>$value) {
		
			 $categorias[] = array(
					'cod_local'	=> $key,
					'nome'			=> $value,
			);
		}
	
		
	
	}else if($cod_categorias == 3){
	
	//Setando o valor dos arrays
		
		$categoria = array('Instituto Ricardo Brennand - Alameda Antônio Brennand, s/n - São João - Várzea, Recife - PE, 50791-904','Museu da Cidade do Recife - Forte das Cinco Pontas - Praça das Cinco Pontas, s/n - São José, Recife - PE, 50020-500','Museu da Abolição - Rua Benfica, 1150 - Madalena, Recife - PE, 50720-001');
		
		//Agora montar o foreach
	
		foreach ($categoria as $key=>$value) {
		
			 $categorias[] = array(
					'cod_local'	=> $key,
					'nome'			=> $value,
			);
		}
	
		
	
	}else if($cod_categorias == 4){
	
	//Setando o valor dos arrays
		
		$categoria = array('Shopping RioMar Recife - Avenida República do Líbano, 251 - Pina, Recife - PE, 51110-160','Plaza Shopping - Rua Doutor João Santos Filho, 255 - Casa Forte, Recife - PE, 52060-904','Shopping Recife - Rua Padre Carapuceiro, 777 - Boa Viagem, Recife - PE, 51020-900','Shopping Tacaruna - Avenida Governador Agamenon Magalhães, 153 - Santo Amaro, Recife - PE, 50110-900');
		
		//Agora montar o foreach
	
		foreach ($categoria as $key=>$value) {
		
			 $categorias[] = array(
					'cod_local'	=> $key,
					'nome'			=> $value,
			);
		}
	
		
	
	}
	

	echo( json_encode( $categorias ) );