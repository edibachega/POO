<?php

	require_once "Carro.php";
	
	$veiculo1 = new Carro("Preto");
	
	$veiculo2 = new Carro();
	$veiculo2->abastecer(15);
	
	var_dump($veiculo1, $veiculo2);
	
	echo $veiculo2::MODELO."\n", $veiculo2::MARCA."\n";
