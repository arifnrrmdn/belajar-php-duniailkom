<?php
    $counter = 1;

    while (true) {
        echo "Looping ke-$counter" . PHP_EOL;
        $counter++;

        if ($counter > 10) {
            break;
        }
    }

