<?php

$sayHello = function (string $name) {
          echo "hello $name" . PHP_EOL;
};

$sayHello("Wahyu");
$sayHello("Dwi");

function sayGoodBye(string $name, $filter)
{
          $finalName = $filter($name);
          echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Wahyu", function (string $name): string {
          return strtoupper($name);
});

$filterFunction = function (string $name): string {
          return strtoupper($name);
};

sayGoodBye("Wahyu", $filterFunction);

$firstName = "Wahyu";
$lastName = "Dwi Amirullah";

$sayHelloWahyu = function () use ($firstName, $lastName) {
          echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloWahyu();

$firstName = "Dwi";
$lastName = "Amir";

$sayHelloWahyu();
