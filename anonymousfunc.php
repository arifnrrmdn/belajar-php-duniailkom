<!-- Instagram @arifnoerramadhan -->
<?php
$a = 'Arif';

$salam = function () use ($a) {
    echo "Selamat malam, Pak $a" . PHP_EOL;
    $a = "Zed";
    echo "Selamat malam, Pak $a" . PHP_EOL;
};

$salam();
echo "Selamat malam, Pak $a" . PHP_EOL;

// Output :
// Selamat malam, Pak Arif
// Selamat malam, Pak Zed
// Selamat malam, Pak Arif