<?php

    namespace POO\Motor;
    
    use POO\Motor\Motor;

/**
 * Description of Motor18
 *
 * @author edinaldo
 */
class Motor18 extends Motor
{
    
    const POTENCIA = 1.8;

    private $nitro = false;

    public function ativaNitro() 
    {
        $this->nitro = true;
    }
   
    /**
    * Acelera o Moror
    * @param int $valor valor da aceleração de 0 a 100
    * @return  int
    */
    public function acelerar($valor = 0)
    {
        $this->aceleracao = $valor;
        
        $torque = $valor * self::POTENCIA;
        
        if($this->nitro == true)
        {
            return $torque * 1.5;
        }else {
            return $torque;
        }
    }
}
