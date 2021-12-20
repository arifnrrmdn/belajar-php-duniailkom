<?php

// $saygoodBye = function ($name) {
//     echo "Good Bye $name" . PHP_EOL;
// };

// $saygoodBye("Arif");

function saygoodbye(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Selamat Jalan $finalname" . PHP_EOL;
}

// saygoodbye("Arif Nur Ramadhan", function (string $name){
//     return strtoupper($name);
// });

// saygoodbye("Arif Nur Ramadhan", function (string $name){
//     return strtolower($name);
// });

$filterfunction = function (string $name): string {
    return strtolower($name);
};

saygoodbye("Arif Nur Ramadhan", $filterfunction);

