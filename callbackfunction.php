<?php 

function sayHello(string $name, callable $filter) 
{
    $finalname = call_user_func($filter, $name);
    echo "Hello $finalname" . PHP_EOL;
}

sayHello("Arif Nur Ramadhan", "strtoupper");