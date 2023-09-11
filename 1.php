<?php
// Definisikan kelas
class Mobil {
    // Properties atau atribut
    public $merk;
    public $warna;
    
    // Konstruktor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }
    
    // Method
    public function infoMobil() {
        return "Mobil ini adalah {$this->merk} berwarna {$this->warna}.";
    }
}

// Buat objek dari kelas Mobil
$mobil1 = new Mobil("Toyota", "Biru");
$mobil2 = new Mobil("Honda", "Merah");

// Panggil method dan tampilkan informasi mobil
echo $mobil1->infoMobil(); // Output: Mobil ini adalah Toyota berwarna Biru.
echo $mobil2->infoMobil(); // Output: Mobil ini adalah Honda berwarna Merah.
?>