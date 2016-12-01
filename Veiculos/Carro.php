<?php

namespace POO\Veiculos;

use POO\Motor\Motor;
use \POO\Motor\InterfaceMotor;

class Carro
{

	const MODELO = "A3"; 
	const MARCA = "AUDI";
		
	public $cor;
        /**
         * @var Motor 
         */
	private $motor;
	private $porta = 4;
	private $tanqueCombustivel = 0;
	
        /**
         * 
         * @param Motor $motor
         * @param string $cor
         */
	public function __construct(InterfaceMotor $motor, $cor = "Branco")
	{
	    $this->tanqueCombustivel = 10;
	    $this->cor = $cor;
            $this->motor = $motor;
	}
	
        /**
         * Liga ou desliga o Motor
         */
	public function ligaDesliga()
	{
            if ($this->motor->estaLigado())
            {
                $this->motor->desliga();
            } else {
                $this->motor->ligar();
            }
	}
	
	
        /**
         * Faz o carro andar
         * @param type $torque
         */
	private function andar($torque)
	{
            echo "Andou ".$torque." Metros\n";
	}
        
        /**
         * Envia acelaração ao motor
         * @param int $valor Valor da aceleração informada
         */
        public function acelerar($valor)
        {
            try {
                echo "Ante de acelerar\n";
                $torque = $this->motor->acelerar($valor);
                $this->andar($torque);
                echo "Depois de acelerar\n";
                
            } catch (\Exception $e) {
                echo $e->getMessage();
            } finally {
                echo "Finally\n";
            } 
            echo "Fim da função\n";
        }

        /**
         * Abastece o veiculo
         * @param int $valor Valor a ser colocado no tanque
         */
        public function abastecer($valor)
	{
	   $this->tanqueCombustivel += $valor;
	}
        
        /**
         * Sobrecarga - Overloading de metodo
         * @param type $name
         * @param type $arguments
         */
        public function __call($name, $arguments) 
        {
            echo "Você não adquiriu o opcional: ".$name;
        }
        
        /**
         *  Sobrecarga - Overloading de atributo
         * @param type $name
         */
        public function __get($name) 
        {
            echo "Você tentou ler o atributo: $name \n\n";
        }
        
        /**
         * Sobrecarga - Overloading de atributo
         * @param type $name
         * @param type $value
         */
        public function __set($name, $value) 
        {
            $this->$name = $value;
            echo "Você tentou escrever no atributo: $name o valor $value \n\n";
        }
	
}


