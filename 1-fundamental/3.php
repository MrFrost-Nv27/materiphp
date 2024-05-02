<?php

echo "Operator Aritmatik" . PHP_EOL;
var_dump(20 + 15);
var_dump(20 - 15);
var_dump(20 * 15);
var_dump(20 / 15);
var_dump((int)(20 / 15));
var_dump(20 / 9);
var_dump((int)(20 / 9));
echo PHP_EOL;
echo PHP_EOL;

echo "Operator Incrementing/Decrementing" . PHP_EOL;
echo "(Bisa dilakukan dengan variabel)" . PHP_EOL;
$angka = 10;
var_dump($angka++);
$angka = 10;
var_dump($angka--);
$angka = 10;
var_dump(++$angka);
$angka = 10;
var_dump(--$angka);
echo PHP_EOL;
echo PHP_EOL;

echo "Operator Perbandingan" . PHP_EOL;
echo "(mengembalikan boolean)" . PHP_EOL;
var_dump("Nova" == "Nova");
var_dump(1 == 1);
var_dump(1 == "1");
var_dump(1 === "1");
var_dump(1 != "1");
var_dump(1 !== "1");