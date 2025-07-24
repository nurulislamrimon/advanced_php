<?php

class Second{

    function say_hello($name) {
        echo 'Hello '.$name.','.'<br>'.'From second How are you?'.'<br>'.'<br>';
    }
}

$second=new Second;

$second->say_hello('Nurul Islam Rimon');