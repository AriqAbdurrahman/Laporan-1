<?php

// pendefinisian sebuah class dengan nama "Nama"
class Nama {
    public static $angka = 1;

// buat method untuk class Nama
    public function halo(){
        return "Ariq " . self::$angka++ . "  <br>";
    }
}

// berfungsi untuk menampilkan property
$obj = new Nama;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();