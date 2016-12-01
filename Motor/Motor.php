<?php
namespace POO\Motor;

use POO\Motor\InterfaceMotor;

/**
 * Classe Generica para motor
 * 
 * @author Edir
 * @link https://github.com/ecaramba/POO
 */
abstract class Motor implements InterfaceMotor
{
   const PONTENCIA = 1.0;
   
   private $tipoCombustivel = "Flex";
   protected $aceleracao = 0;
   private $ligado = false;
   
  /**
   * Acelera o Motor
   * @param int $valor Valor da aceleração de 0 a 100
   * @return int
   */
   public function acelerar($valor = 0)
   {
       $this->aceleracao = $valor;
       $potencia = $valor * self::PONTENCIA;
       return $potencia;
   }
   
   /**
    * Liga o motor, setando o atributo ligado como true
    */
   public function ligar()
   {
       $this->ligado = true;
   }
   
   /**
    * Desliga o motor, setando o atributo ligado como false
    */
   public function desliga()
   {
       $this->ligado = false;
   }
   
   /**
    * Informa se o motor esta ligado ou desligado
    * @return bool
    */
   public function estaLigado()
   {
       return $this->ligado;
   }
}
