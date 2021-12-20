<?php

$firstname = "Arif";
$lastname = "Nur Ramadhan";

// dengan anonymousfunction

$anonymous = function () use ($firstname, $lastname): string {
    return "Hello $firstname $lastname" . PHP_EOL;
};

echo $anonymous();

//  dengan arrowfunction

$sayhello = fn() => "Hello $firstname $lastname" . PHP_EOL;

echo $sayhello();