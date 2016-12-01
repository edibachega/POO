<?php

/**
 * Garante que exista apenas uma instancia dessa classe no projeto
 *
 * @author aluno
 */
class Singleton 
{
    static private $obj = null;
    
    private function __construct() 
    {
        
    }
    
    static public function criar()
    {
        if(self::$obj == null)
        {
            self::$obj = new self();
        }
        return self::$obj;
    }
}
