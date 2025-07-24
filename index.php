<?php 

spl_autoload_register(function($class){
    require_once(strtolower($class).'.php');
});


$first=new First;

$first->say_hello('Nurul Islam Rimon');



$second=new Second;

$second->say_hello('Nurul Islam Rimon');



$third=new Third;

$third->say_hello('Nurul Islam Rimon');