<?php

class Greeting{

    function say_hello($name) {
        echo 'Hello '.$name.',<br>'.'How are you?';
    }
}

$greeting=new Greeting;

$greeting->say_hello('Nurul Islam Rimon');