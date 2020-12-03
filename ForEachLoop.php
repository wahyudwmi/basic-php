<?php

$data = ['Wahyu', 'Dwi', 'Amirullah'];

for ($i = 0; $i < count($data); $i++) {
          echo "Data ke-$i adalah $data[$i]" . PHP_EOL;
}

foreach ($data as $index => $name) {
          echo "Data index ke-$index adalah $name\n";
}

foreach ($data as $name) {
          "Data $name\n";
}

$seseorang = [
          'nama_depan' => 'Wahyu',
          'nama_tengah' => 'Dwi',
          'nama_belakang' => 'Amirullah'
];

foreach ($seseorang as $key => $value) {
          echo "$key : $value" . PHP_EOL;
}
