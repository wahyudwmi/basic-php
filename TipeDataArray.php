<?php

$value = array(5, 4, 3, 2, 1.5);
var_dump($value);

$nama = ['wahyu', 'Dwi', 'Amirullah'];
var_dump($nama);

var_dump($nama[0]);

$nama[0] = 'Yuda';

unset($nama[1]);
var_dump($nama);

$nama[] = 'Putra';
var_dump($nama);

var_dump(count($nama));

$wahyu = array(
          'id' => 'wahyudwmi',
          'nama' => 'Wahyu Dwi Amirullah',
          'umur' => '24',
          'alamat' => array(
                    'kota' => 'Samarinda',
                    'Negara' => 'Indonesia'
          )
);

var_dump($wahyu);

var_dump($wahyu['nama']);
var_dump($wahyu['alamat']['kota']);

$dani = [
          'id' => 'daniii',
          'nama' => 'Dani A',
          'umur' => '23',
          'alamat' => [
                    'kota' => 'Samarinda',
                    'negara' => 'Indonesia'
          ]
];

var_dump($dani);
