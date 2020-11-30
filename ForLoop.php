<?php

for ($iteration = 1; $iteration <= 10; $iteration++) {
          echo 'Ini adalah iterasi for loop ke-' . $iteration . PHP_EOL;
}
for ($iteration = 10; $iteration >= 1; $iteration--) {
          echo 'Ini adalah iterasi for loop ke-' . $iteration . PHP_EOL;
}
for ($iteration = 1; $iteration <= 10; $iteration++) :
          echo 'Ini adalah iterasi for loop ke-' . $iteration . PHP_EOL;
endfor;
for ($iteration = 10; $iteration >= 1; $iteration--) :
          echo 'Ini adalah iterasi for loop ke-' . $iteration . PHP_EOL;
endfor;
