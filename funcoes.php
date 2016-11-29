<?php

function ola($nome)
{
    echo "olá $nome";
}

//ola("edinaldo");

$idade = 20;

$ola = function($nome) use (&$idade)
{
    echo " que legal $nome ";
    $idade = 35;
};

$ola(" Edinaldo ");
echo $idade;


function teste(Closure $param)
{
    $param('Edinaldo');
}

teste(function(){
    
});