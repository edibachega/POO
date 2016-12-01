<pre>
<?php

// Comentaario
require_once 'autoload.php';
/*require_once 'Motor/InterfaceMotor.php';
require_once "Veiculos/Carro.php";
require_once 'Motor/Motor.php';
require_once 'Motor/Motor18.php';
require_once 'Motor/MotorTurbo.php';
require_once 'Motor/Turbinado.php';
require_once 'MWM/Motor.php'; */

use POO\Motor\Motor18;
use POO\Motor\MotorTurbo;
use MWM\Motor;

//$motor = new Motor();
$motor18 = new Motor18();
$motorTurbo = new MotorTurbo();
$motorMWM = new Motor();

$veiculo1 = new POO\Veiculos\Carro($motor18, "Preto");
$veiculo2 = clone $veiculo1;

$veiculo2->cor = "Vermelho";
$veiculo2->abastecer(15);

//$veiculo1->ligaDesliga();
$veiculo1->acelerar(40);

echo "\n\n";


//echo "Pontencia do motor: ".Motor::PONTENCIA;

