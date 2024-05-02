<?php

var_dump(null);
var_dump("Coba");
var_dump(1);
var_dump(1.1);
var_dump(true);

echo PHP_EOL;
echo PHP_EOL;
var_dump([1, "a", 3]);
var_dump([
    "nama" => "Nova",
    "jurusan" => "Teknik Informatika",
]);

class Orang
{
    public function __construct(public String $nama = "nova", public String $jurusan = "Teknik Informatika", )
    {
    }
}

var_dump(new Orang());
