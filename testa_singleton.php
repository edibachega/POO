<?php

require_once 'Singleton.php';

$obj1 = Singleton::criar();
$obj2 = Singleton::criar();

var_dump($obj1, $obj2);