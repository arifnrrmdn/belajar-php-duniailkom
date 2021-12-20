<?php
    
    $nilai_harian = 30;
    $nilai_ujian = 80;

    // if ($nilai_harian >= 70 && $nilai_ujian >= 75) {
    //     echo "Anda Lulus" . PHP_EOL;
    // } else {
    //     echo "Anda Tidak lulus";
    // }

    // if ($nilai_harian >= 80 && $nilai_ujian >= 80) {
    //     echo "Nilai Anda A" . PHP_EOL;
    // } elseif ($nilai_harian >= 70 && $nilai_ujian >= 70) {
    //     echo "Nilai Anda B" . PHP_EOL;
    // } elseif ($nilai_harian >= 60 && $nilai_ujian >= 60) {
    //     echo "Nilai Anda C" . PHP_EOL;
    // } elseif ($nilai_harian >= 50 && $nilai_ujian >= 50) {
    //     echo "Nilai Anda D" . PHP_EOL;
    // } else {
    //     echo "Nilai Anda E" . PHP_EOL;
    // }

    if ($nilai_harian >= 80 && $nilai_ujian >= 80) :
        echo "Nilai Anda A" . PHP_EOL;
     elseif ($nilai_harian >= 70 && $nilai_ujian >= 70) :
        echo "Nilai Anda B" . PHP_EOL;
     elseif ($nilai_harian >= 60 && $nilai_ujian >= 60) :
        echo "Nilai Anda C" . PHP_EOL;
     elseif ($nilai_harian >= 50 && $nilai_ujian >= 50) :
        echo "Nilai Anda D" . PHP_EOL;
     else :
        echo "Nilai Anda E" . PHP_EOL;
    endif;