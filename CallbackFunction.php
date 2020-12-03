<?php

function sayHello(string $name, callable $filter)
{
          $finalName = call_user_func($filter, $name);
          echo "Hello $finalName" . PHP_EOL;
}

sayHello("Wahyu", "strtoupper");
sayHello("Wahyu", "strtolower");

sayHello("Wahyu", function (string $name): string {
          return strtoupper($name);
});

sayHello("Wahyu", fn ($name) => strtoupper($name));
