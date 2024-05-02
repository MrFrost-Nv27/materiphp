<?php

// Contoh For loop dimulai dari 0 sebanyak x
$angka = 10;
for ($i = 0; $i < $angka; $i++) {
    echo "Ini looping ke $i dari $angka" . PHP_EOL;
}
echo PHP_EOL;

// Contoh For loop dimulai dari 1 sebanyak x
$angka = 10;
for ($i = 1; $i <= $angka; $i++) {
    echo "Ini looping ke $i dari $angka" . PHP_EOL;
}
echo PHP_EOL;

// Contoh penggunaan foreach terhadap array (tanpa key)
$array = ["a", "b", "c"];
foreach ($array as $v) {
    var_dump($v);
}
echo PHP_EOL;

// Contoh penggunaan foreach terhadap array (dengan key index)
$array = ["a", "b", "c"];
foreach ($array as $k => $v) {
    var_dump($k, $v);
}
echo PHP_EOL;

// Contoh penggunaan foreach terhadap array (dengan key string)
$array = [
    "key1" => "a",
    "key2" => "b",
    "key3" => "c",
];
foreach ($array as $k => $v) {
    var_dump($k, $v);
}