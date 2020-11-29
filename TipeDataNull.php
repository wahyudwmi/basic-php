<?php

$nama = 'Wahyu';
$nama = null;

$age = null;

echo 'nama : ';
echo $nama;
echo "\n";

echo 'Age : ';
echo $age;
echo "\n";

echo 'Is Name Null? : ';
var_dump(is_null($nama));
echo "\n";

$contoh = 'Wahyu';
unset($contoh);

$contoh = 'Dwi';
$contoh = null;

var_dump(isset($contoh));
