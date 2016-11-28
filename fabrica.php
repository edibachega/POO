<pre>
<?php

    require_once 'Carro.php';
    require_once './Motor.php';
    
    $motor = new Motor();
    
    $veiculo1 = new Carro($motor, "Preto");
    $veiculo2 = clone $veiculo1;
    
    $veiculo2->cor = "vermelho";
    $veiculo2->abastecer(15);
    
    $veiculo1->acelerar(40);
    
    var_dump($veiculo1);
    
    echo "Potência do motor: ".Motor::POTENCIA;
    
    //git-scm.com/book
    
    
    