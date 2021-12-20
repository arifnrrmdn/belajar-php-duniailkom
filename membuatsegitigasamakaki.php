<!-- Membuat segitiga sama kaki -->
<?php

    $jml = 1;
    for($brs = 1; $brs <= 5; $brs++){
    for($a = 5; $a > $brs; $a--){
        echo " ";
    }
    for($b = 1; $b <= $jml; $b++){
        echo "*";
    }
    $jml = $jml + 2;
    echo PHP_EOL;
    }

//     Output :
//      *
//     ***
//    *****
//   *******
//  *********