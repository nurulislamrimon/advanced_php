<?php

class Third{

    function say_hello($name) {
        echo 'Hello '.$name.','.'<br>'.'From third How are you?'.'<br>'.'<br>';
    }
}

$third=new Third;

$third->say_hello('Nurul Islam Rimon');