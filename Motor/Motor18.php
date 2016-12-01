<?php
namespace POO\Motor;

use POO\Motor\Motor;

/**
 * Description of Motor18
 *
 * @author Edir
 */
class Motor18 extends Motor implements \JsonSerializable, 
                                       \Countable
{
    const PONTENCIA = 1.8;
    
    private $nitro = false;
    
    public function ativaNitro()
    {
        $this->nitro = true;
    }
    
   /**
   * Acelera o Motor
   * @param int $valor Valor da aceleração de 0 a 100
   * @return int
   */
   public function acelerar($valor = 0)
   {
       if ($this->estaLigado() == false)
       {
           throw new \Exception("Não foi possivel acelerar, porque o motor não esta ligado!");
       }
       
       $this->aceleracao = $valor;
       
       $torque = $valor * self::PONTENCIA;
       
       if ($this->nitro == true)
       {
           return $torque * 1.5;
       } else {
           return $torque;
       }
   }
   
   public function jsonSerialize() {
       return array(
           "potencia" => self::PONTENCIA,
           "nitro" => $this->nitro
           );
   }
   
   public function count() 
   {
       return $this->aceleracao;
   }


}
