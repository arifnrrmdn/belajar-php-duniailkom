<?php
    // function sum(int $first, int $second) {
    //     $total = $first + $second;
    //     return $total;
    // }

    // $result = sum(100, 100);
    // // var_dump($result);
    // echo $result;

    function mencariNilai(int $value): string 
    {
        if ($value >= 80) {
            return "A";
        } else if ($value >= 70) {
            return "B";
        } else if ($value >= 60) {
            return "C";
        } else {
            return "E";
        }
    }

    $total = mencariNilai(50);
    var_dump($total);