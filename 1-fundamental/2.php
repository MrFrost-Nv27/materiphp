<?php

// Deklarasi
$variabel;
var_dump($variabel);
echo PHP_EOL;

// Inisialisasi
$variabel = 10;
var_dump($variabel);
echo PHP_EOL;

// Deklarasi dan Inisialisasi
$variabel = 10;
var_dump($variabel);
echo PHP_EOL;

// Inisialisasi ulang
$variabel = 8;
var_dump($variabel);
echo PHP_EOL;

// Menimpa deklarasi
$variabel = "Nova";
var_dump($variabel);
echo PHP_EOL;

// String Literal dan
// Contoh Penggunaan Variabel Sederhana
echo "Nama Saya Adalah " . $variabel;
echo PHP_EOL;
echo "Saya Bilang Nama Saya $variabel";
echo PHP_EOL;
echo 'Astaga, Nama Saya ' . $variabel;
echo PHP_EOL;
echo 'Nama Saya $variabel';
echo PHP_EOL;
echo 'Ini yang terakhir (dan akan menampilkan error), nama saya ' + $variabel;