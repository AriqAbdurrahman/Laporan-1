<?php

// pendefinisian sebuah class dengan nama coba
class Coba {

    public $kelas = __CLASS__;
}

// berfungsi untuk menampilkan property
$obj = new Coba;
echo $obj->kelas; 