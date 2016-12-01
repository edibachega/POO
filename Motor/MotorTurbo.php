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
    private $turbo = false;
    
    public function ativaTurbo()
    {
        $this->turbo = true;
    }
}
