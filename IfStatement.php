<?php

$absen = 90;
$nilai = 60;


if ($nilai >= 80 && $absen >= 80) {
          echo 'Anda Mendapatkan Nilai : A' . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
          echo 'Anda Mendapatkan Nilai : B' . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
          echo 'Anda Mendapatkan Nilai : C' . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50) {
          echo 'Anda Mendapatkan Nilai : D' . PHP_EOL;
} else {
          echo 'Anda Mendapatkan Nilai : F' . PHP_EOL;
}


if ($nilai >= 80 && $absen >= 80) :
          echo 'Anda Mendapatkan Nilai : A' . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
          echo 'Anda Mendapatkan Nilai : B' . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
          echo 'Anda Mendapatkan Nilai : C' . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
          echo 'Anda Mendapatkan Nilai : D' . PHP_EOL;
else :
          echo 'Anda Mendapatkan Nilai : F' . PHP_EOL;
endif;
