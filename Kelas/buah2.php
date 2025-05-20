<?php
class Buah {
    public $nama;
    public $warna;
    public $bobot;

    public function setNama($n) {
        $this->nama = $n;
    }

    protected function setWarna($n) {
        $this->warna = $n;
    }

    private function setBobot($n) {
        $this->bobot = $n;
    }

    public function setWarnaPublic($n) {
        $this->setWarna($n);
    }

    public function setBobotPublic($n) {
        $this->setBobot($n);
    }

    public function getInfo() {
        return "Nama: {$this->nama}, Warna: {$this->warna}, Berat: {$this->bobot} gram";
    }
}

$mango = new Buah();
$mango->setNama('Mangga');
$mango->setWarnaPublic('Kuning');
$mango->setBobotPublic('300');

echo $mango->getInfo();
?>