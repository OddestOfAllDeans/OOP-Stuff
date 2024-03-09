<?php
class Asmarelda {
    public $nama;
    public $umur;
    public $ulti;
    public $heat;

    public function __construct($nama, $umur, $ulti, $heat) {
    $this->nama = $nama;
    $this->umur = $umur;
    $this->ulti = $ulti;
    $this->panas = $heat;
}

public function getInfo() {
    return "Halo, nama saya " . $this->nama . " Umur saya: " . $this->umur . " dan ulti saya yaitu..." . $this->ulti . " eh itu heat deng hehehe... yang asli tu " . $this->panas;
}
}

$orang = new Asmarelda("Kazama Jing'", 20, "Kutshirage!!!!!!!", "ANJING KAMU!!! Cipciage!!!");

echo "Nama: " . $orang->nama . "<br>";
echo "Umur: " . $orang->umur . "<br>";

echo $orang->getInfo();


?>