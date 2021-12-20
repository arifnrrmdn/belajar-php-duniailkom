<?php

function sayHello()
{
    $name = "Arif Nur Ramadhan";  // local scope
    echo "Hello $name" . PHP_EOL;
}

sayHello();  // Hello Arif Nur Ramadhan