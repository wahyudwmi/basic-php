<?php

function say()
{
          echo "say" . PHP_EOL;
}


function hello()
{
          echo "hello" . PHP_EOL;
}

$sayHello = 'Say';
$sayHello();

$sayHello = 'hello';
$sayHello();


function sayHey(string $nama, $filter)
{
          $finalName = $filter($nama);
          echo 'Say Hello ' . $finalName . PHP_EOL;
}

function sampleFunction(string $name): string
{
          return $name;
}

sayHey('Wahyu', 'sampleFunction');
sayHey('Wahyu', 'strtoupper');
sayHey('Wahyu', 'strtolower');
