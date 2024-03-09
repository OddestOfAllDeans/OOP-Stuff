<?php
class Manusia {

    public $nama;
    public $umur;

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;

    }

    public function getInfo() {
        return "Nama: " . $this->nama . "<br> Umur: " . $this->umur;
    }
    public function sapa() {
        return "Halo, nama saya " . $this->nama;
    }
}

$orang = new Manusia("Asmi Sapkiaki", 18);

echo $orang->getInfo() . "<br>";

echo $orang->sapa();


?>