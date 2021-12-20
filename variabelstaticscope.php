<?php

function increment()
{
    static $counter = 1;  // pake static boss senggol dong

    echo "Counter = $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();

// Sebelum pake static
// Counter = 1
// Counter = 1
// Counter = 1

// Sesudah pake static
// Counter = 1
// Counter = 2
// Counter = 3