<?php

$firstName = "Arif";
$lastName = "Nur Ramadhan";

$sayhelloarif = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayhelloarif();