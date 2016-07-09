<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	$cod_categorias = mysql_real_escape_string( $_REQUEST['cod_categorias'] );

	$categorias = array();
	
	if($cod_categorias == 1){
	
		//Setando o valor dos arrays
		$categoria = array(
		    array(
		        "nome" => "Uci Kinoplex",
		        "endereco" => "Travessa Padre Carapuceiro, 777 - Boa Viagem, Recife - PE, 51020-280"
		    ),
		    array(
		        "nome" => "Cinemark",
		        "endereco" => "Avenida República do Líbano, 251 - Pina, Recife - PE, 51110-160"
		    ),
		    array(
		        "nome" => "Cinépolis",
		        "endereco" => "Shopping Guararapes - Avenida Barreto de Menezes, 800 - Piedade, Jaboatão dos Guararapes - PE, 54325-000"
		    )
		);
		
		//Agora montar o foreach
		foreach ($categoria as $innerArray) {
		    //  Check type
		    if (is_array($innerArray)){
		        //  Scan through inner loop
		         $categorias[] = $innerArray;
		    }else{
		        // one, two, three
		        echo $innerArray;
		    }
		}
	
	}else if($cod_categorias == 2){
	
		//Setando o valor dos arrays

		$categoria = array(
		    array(
		        "nome" => "Hotel Boa Viagem Praia",
		        "endereco" => "Avenida Boa Viagem, 5576 - Boa Viagem, Recife - PE, 51030-000"
		    ),
		    array(
		        "nome" => "Praia do Pina (Praia do Sport) - 482",
		        "endereco" => "Avenida Boa Viagem, 480 - Boa Viagem, Recife - PE"
		    ),
		    array(
		        "nome" => "Praia de Piedade - Piedade",
		        "endereco" => "Praia de Piedade - Piedade - Jaboatão dos Guararapes - PE"
		    )
		);
		
		//Agora montar o foreach
		foreach ($categoria as $innerArray) {
		    //  Check type
		    if (is_array($innerArray)){
		        //  Scan through inner loop
		         $categorias[] = $innerArray;
		    }else{
		        // one, two, three
		        echo $innerArray;
		    }
		}
	
	}else if($cod_categorias == 3){
	
		//Setando o valor dos arrays

		$categoria = array(
		    array(
		        "nome" => "Instituto Ricardo Brennand",
		        "endereco" => "Alameda Antônio Brennand, s/n - São João - Várzea, Recife - PE, 50791-904"
		    ),
		    array(
		        "nome" => "Museu da Cidade do Recife - Forte das Cinco Pontas",
		        "endereco" => "Praça das Cinco Pontas, s/n - São José, Recife - PE, 50020-500"
		    ),
		    array(
		        "nome" => "Museu da Abolição",
		        "endereco" => "Rua Benfica, 1150 - Madalena, Recife - PE, 50720-001"
		    )
		);
		
		//Agora montar o foreach
		foreach ($categoria as $innerArray) {
		    //  Check type
		    if (is_array($innerArray)){
		        //  Scan through inner loop
		         $categorias[] = $innerArray;
		    }else{
		        // one, two, three
		        echo $innerArray;
		    }
		}
		
	
	}else if($cod_categorias == 4){
	
		//Setando o valor dos arrays

		$categoria = array(
		    array(
		        "nome" => "Shopping RioMar Recife",
		        "endereco" => "Avenida República do Líbano, 251 - Pina, Recife - PE, 51110-160"
		    ),
		    array(
		        "nome" => "Plaza Shopping",
		        "endereco" => "Rua Doutor João Santos Filho, 255 - Casa Forte, Recife - PE, 52060-904"
		    ),
		    array(
		        "nome" => "Shopping Recife",
		        "endereco" => "Rua Padre Carapuceiro, 777 - Boa Viagem, Recife - PE, 51020-900"
		    ),
		    array(
		        "nome" => "Shopping Tacaruna",
		        "endereco" => "Avenida Governador Agamenon Magalhães, 153 - Santo Amaro, Recife - PE, 50110-900"
		    )
		);
		
		//Agora montar o foreach
		foreach ($categoria as $innerArray) {
		    //  Check type
		    if (is_array($innerArray)){
		        //  Scan through inner loop
		         $categorias[] = $innerArray;
		    }else{
		        // one, two, three
		        echo $innerArray;
		    }
		}
		
	}
	

	echo( json_encode( $categorias ) );