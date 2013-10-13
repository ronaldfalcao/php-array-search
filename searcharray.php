<?php

	header('Content-Type: text/html; charset=utf-8'); 

	echo '<h1>Testando função array_search()</h1>';
	echo '<h2>Mostrando o array original</h2>';

	print_r ($array_original);

	$array_original = array(0=> 'laranja', 1=> 'amora', 2=> 'jaca', 3=> 'tamarindo',4=> 'tangerina');

	$buscar = 'tangerina';

	echo '<h3>Procurando o valor <b>tangerina<b/></h3>';
	echo '<p>A função retorna a key onde se encontra o valor: </p>';
	
	$resultado = array_search ($buscar, $array_original);
	
	echo '<p>Conferindo o valor da key '.$resultado.'</p>';
	echo '<p>Valor da key acima: '.$array_original[$resultado].'<p/>';	


 

?>
