<?php

echo 'Nama : ';
echo 'Wahyu Dwi Amirullah';
echo "\n";

echo 'nama : ';
echo "Wahyu\t Dwi\t Amirullah\n";

echo <<<WAHYU
Semangat belajar PHP
Saat ini kita mempelajari tipe data string
ini adalah salah satu cara membuat string dengan heredoc

WAHYU;

echo <<<'WAHYU'
Semangat belajar PHP
Saat ini kita mempelajari tipe data string
ini adalah salah satu cara membuat string dengan heredoc

WAHYU;
