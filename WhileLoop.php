<?php

$nilai = 1;
while ($nilai <= 10) {
          echo 'ini adalah iterasi ke-' . $nilai . PHP_EOL;
          $nilai++;
}

$nilai = 1;
while ($nilai <= 10) :
          echo 'ini adalah iterasi ke-' . $nilai . PHP_EOL;
          $nilai++;
endwhile;
