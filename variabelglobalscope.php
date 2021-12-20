<?php

$name = "Arif Nur Ramadhan"; // Global scope

function sayHello()
{
    global $name; //global keyword
    echo "Hello $name" . PHP_EOL;
}

sayHello();  // Hello Arif Nur Ramadhan

