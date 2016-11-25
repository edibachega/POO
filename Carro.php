<?php

	class Carro
	{
		const MODELO = "A3";
		const MARCA = "AUDI";
	
		public $cor;
		private $motor = 1.0;
		private $porta = 4;
		private $tanqueCombustivel = 0;
		
		public function __construct($cor = "Branco")
		{			
			$this->tanqueCombustivel = 10;
			$this->cor = $cor;	
		}
		
		public function ligar()
		{

		}

		public function desligar()
		{

		}

		public function andar()
		{

		}
		
		public function abastecer($valor)
		{
			$this->tanqueCombustivel += $valor;
		}

	}

