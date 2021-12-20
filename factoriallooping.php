<?php

// Factorial Menggunakan Loop
function factorialloop(int $value): int
{
    $total = 1;
    
    for($i = 1; $i <= $value; $i++) {
        $total = $total * $i;
    }

    return $total;
}

var_dump(factorialloop(5));  // int(120)
var_dump(1 * 2 * 3 * 4 * 5); // int(120)

echo "\n";

// Factorial. Menggunakan Recursive

function factorialRecursive(int $value): int
{
    if($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5)); // int(120)
