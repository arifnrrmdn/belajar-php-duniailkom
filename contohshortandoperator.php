<?php

$user = "admin";
$salam = ($user = "admin") ? "Welcome Admin!" . PHP_EOL : "Maaf! anda bukan admin!";

echo $salam;

// Output :
// Welcome Admin!

if($user == "admin"){
    $salam = "Welcome Admin!" . PHP_EOL;
} else {
    $salam = "Maaf, anda bukan admin!";
}

echo $salam;

// Output :
// Welcome Admin!