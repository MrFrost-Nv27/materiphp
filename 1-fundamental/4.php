<?php

// Penggunaan If
$cek = 10;
if ($cek == 10) {
    var_dump("Isi Variabel Pertama Cek = 10");
} else {
    var_dump("Isi Variabel Pertama Cek != 10");
}
echo PHP_EOL;

// Penggunaan If contoh 2
$cek = 12;
if ($cek > 10) {
    var_dump("Isi Variabel Kedua Cek Lebih Besar Dari 10");
} else {
    var_dump("Isi Variabel Kedua Cek Lebih Kecil atau Sama dengan 10");
}
echo PHP_EOL;

// Penggunaan Switch case
$cek = 1;
switch ($cek) {
    case 1:
        var_dump("Isi Variabel Ketiga Sama dengan 1");
        break;
    case 2:
        var_dump("Isi Variabel Ketiga Sama dengan 2");
        break;
    case 3:
        var_dump("Isi Variabel Ketiga Sama dengan 3");
        break;
    default:
        var_dump("Ini akan dieksekusi jika tidak ada case yang sesuai");
        break;
}
echo PHP_EOL;

// Penggunaan match
$cek = 5;
var_dump(match ($cek) {
    1 => "Isi Variabel Keempat Sama dengan 1",
    2 => "Isi Variabel Keempat Sama dengan 2",
    3 => "Isi Variabel Keempat Sama dengan 3",
    default => "Ini akan dieksekusi jika tidak ada case yang sesuai",
});