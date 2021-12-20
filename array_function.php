<!-- Array Function -->
<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$mapFunction = fn(int $value) => $value * 10;
$result = array_map($mapFunction, $data);
var_dump($result);

// array(10) {
//     [0]=>
//     int(10)
//     [1]=>
//     int(20)
//     [2]=>
//     int(30)
//     [3]=>
//     int(40)
//     [4]=>
//     int(50)
//     [5]=>
//     int(60)
//     [6]=>
//     int(70)
//     [7]=>
//     int(80)
//     [8]=>
//     int(90)
//     [9]=>
//     int(100)
//   }

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
rsort($data);
var_dump($data);

// array(10) {
//     [0]=>
//     int(10)
//     [1]=>
//     int(9)
//     [2]=>
//     int(8)
//     [3]=>
//     int(7)
//     [4]=>
//     int(6)
//     [5]=>
//     int(5)
//     [6]=>
//     int(4)
//     [7]=>
//     int(3)
//     [8]=>
//     int(2)
//     [9]=>
//     int(1)
//   }

$person = [
    "firstname" => "Arif",
    "lastname" => "Nur Ramadhan"
];

var_dump(array_keys($person));
// array(2) {
//     [0]=>
//     string(9) "firstname"
//     [1]=>
//     string(8) "lastname"
//   }
var_dump(array_values($person));
// array(2) {
//     [0]=>
//     string(4) "Arif"
//     [1]=>
//     string(12) "Nur Ramadhan"
//   }