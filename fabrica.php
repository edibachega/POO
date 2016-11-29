<pre>
<?php

    require_once './Veiculos/Carro.php';
    require_once './Motor/Motor.php';
    require_once './Motor/Motor18.php';
    require_once './Motor/MotorTurbo.php';
 
    
    //$motor = new Motor();
    $motor18 = new POO\Motor\Motor18();
    $motorTurbo = new POO\Motor\MotorTurbo();
  
    
    $veiculo1 = new POO\Veiculos\Carro($motorTurbo, "Preto");
    $veiculo2 = clone $veiculo1;
    
    $veiculo2->cor = "vermelho";
    $veiculo2->abastecer(15);
    
    $veiculo1->acelerar(40);
    $veiculo1->estacionar();
    
    $veiculo1->tanqueCombustivel = "120";
    
    echo "\n\n";
    
    //var_dump($veiculo1);
    
   // echo "Potência do motor: ".Motor::POTENCIA;
    
    //git-scm.com/book
    
   
    
    var_dump($veiculo1);
    
    