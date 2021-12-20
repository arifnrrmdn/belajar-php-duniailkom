<?php 
    echo "Common Name Cross-Site Scripting (XSS) : \n";
    $name = ["Alex", "Kira", "Rey", "Zed"];

    // for ($i = 0; $i < count($name); $i++) {
    //     echo "Selamat pagi $name[$i]" . PHP_EOL;
    // }
    
    // foreach ($name as $names) {
    //     echo "Hai $names" . PHP_EOL;
    // }

        for ($i = 0; $i < count($name); $i++) {
            echo "Selamat siang $name[$i]" . PHP_EOL;
    }

    // echo count($name);