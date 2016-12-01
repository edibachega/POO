<?php

namespace MWM;

use \POO\Motor\InterfaceMotor;

/**
 * Motor MWM
 *
 * @author aluno
 */
class Motor implements InterfaceMotor
{
    
    public function acelerar($valor = 0) 
    {
        return $valor;
    }

}
