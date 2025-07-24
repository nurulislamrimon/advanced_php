<?php

class First{

    function say_hello($name) {
        echo 'Hello '.$name.','.'<br>'.'From first How are you?'.'<br>'.'<br>';
    }
}

$first=new First;

$first->say_hello('Nurul Islam Rimon');