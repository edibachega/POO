<?php
    
    namespace POO\Veiculos;
    
    use POO\Motor\Motor;
    
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
        public function __construct(Motor $motor, $cor = "Branco")
        {			
            $this->tanqueCombustivel = 10;
            $this->cor = $cor;	
            $this->motor = $motor;
        }
        
        /**
         * Liga o motor
         */
        public function ligar()
        {

        }
        
        /**
         * Desliga o motor
         */
        public function desligar()
        {

        }
        /**
         * Faz o carro andar
         * @param int $torque
         */
        private function andar($torque)
        {
            echo "andou " .$torque. " Metros\n";
        }
        
        /**
         * Envia aceleração ao motor
         * @param int $valor valor da aceleração informada
         */
        public function acelerar($valor)
        {
            $torque = $this->motor->acelerar($valor);
            $this->andar($torque);
        }
        
        /**
         * Abastece o veículo
         * @param int $valor a ser colocado no tanque
         */
        public function abastecer($valor)
        {
            $this->tanqueCombustivel += $valor;
        }
        
        public function __call($name, $arguments) 
        {
            echo "vc tentou não adquiriu o opcional: ".$name."\n";
        }
        /**
         * Sobrecarga - overloading de atributo
         * @param type $name
         */
        public function __get($name) 
        {
            echo "você tentou ler o atributo: $name \n\n";
        }
        /**
         * Sobrecarga - overloading de atributo
         * @param type $name
         * @param type $value
         */
        public function __set($name, $value) 
        {
            $this->$name = $value;
            echo "você tentou esrever no atributo $name o valor $value \n\n";
        }

    }

