<?php

namespace POO\Motor;

use POO\Motor\Motor;

/**
 * Description of MotorTurbo
 *
 * @author aluno
 */
final class MotorTurbo extends Motor
{
    const POTENCIA = 2.6;

    private $turbo = false;

    public function ativaTurbo() 
    {
        $this->turbo= true;
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
        
        if($this->turbo == true)
        {
            return $torque * 2.5;
        }else {
            return $torque;
        }
    }
}
