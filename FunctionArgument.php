<?php

function helloWorld($firstName, $lastName = "")
{
          echo "Halo $firstName $lastName" . PHP_EOL;
}

helloWorld("Wahyu");
helloWorld("Dwi");
helloWorld("Wahyu", "Dwi");

function sum(int $first, int $last)
{
          $total = $first + $last;
          echo "Total $first + $last = $total" . PHP_EOL;
}

sum(10, 10);
sum("10", "10");
sum(true, false);

function sumAll(...$values) //Variadic Functions
{
          $total = 0;
          foreach ($values as $value) {
                    $total += $value;
          }

          echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

$value = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$value); //Argument Unpacking

// "..." mean the splat operator or the scatter operator. memungkinkan untuk memasukkan banyak parameter kedalam sebuah fungsi 
