<?php

function ola($nome)
{
    echo "Olá $nome";
}

$idade = 20;

$ola = function($nome) use (&$idade)
{
    echo "Que legal $nome";
    $idade = 35;
};

var_dump($ola);