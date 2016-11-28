<?php
    /**
     * Classe Genérica do Motor
     * @author Edinaldo
     */
    class Motor 
    {
        const POTENCIA = 1.0;
        
        private $tipoCombustivel = "flex";
        private $aceleracao = 0;
        
        /**
         * Acelera o Moror
         * @param int $valor valor da aceleração de 0 a 100
         * @return  int
         */
        public function acelerar($valor = 0)
        {
            $this->aceleracao = $valor;
            $potencia = $valor * self::POTENCIA;
            return $potencia;
        }
        
        //teste de git
    }
