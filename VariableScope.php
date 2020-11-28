<?php

$nama = 'Wahyu'; //Global Scope

function namaSaya()
{
          global $nama; //global keyword u/ $nama
          echo $nama . PHP_EOL;

          echo $GLOBALS['nama'] . PHP_EOL;
}

namaSaya();
