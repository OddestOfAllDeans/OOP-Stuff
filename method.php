<?php
class Manusia {

    public $nama;
    public $umur;
    public $hobby;
    public $pacar;

    public function __construct($nama, $umur, $hobby, $pacar) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->hobby = $hobby;
        $this->pacar = $pacar;

    }

    public function getInfo() {
        return "Nama: " . $this->nama . "<br> Umur: " . $this->umur . " <br>Dan hobby saya yaitu " . $this->hobby;
    }
    public function sapa() {
        return "Nama pacar saya yaitu " . $this->pacar;
    }
}

$orang = new Manusia("Asmi Sapkiaki", 18, "Ngewe sama asmarelda", "Asmarelda Capciaki Putri Kencani");

echo $orang->getInfo() . "<br>";

echo $orang->sapa();


?>