<?php
// ✅ Membuat class bernama 'Buah'
class Buah
{
    public $nama;        // ✅ Public: bisa diakses langsung dari luar class
    protected $warna;    // 🔒 Protected: hanya bisa diakses dari dalam class atau class turunan
    private $berat;      // 🔒 Private: hanya bisa diakses dari dalam class ini saja

    // ✅ Setter untuk warna (karena $warna bersifat protected)
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // ✅ Setter untuk berat (karena $berat bersifat private)
    public function setBerat($berat) {
        $this->berat = $berat;
    }

    // ✅ Getter untuk warna (untuk membaca nilai protected $warna)
    public function getWarna() {
        return $this->warna;
    }

    // ✅ Getter untuk berat (untuk membaca nilai private $berat)
    public function getBerat() {
        return $this->berat;
    }
}

// ✅ Membuat objek baru dari class 'Buah'
$mango = new Buah();

// ✅ Mengisi nilai properti menggunakan setter
$mango->nama = 'Mango';             // Public → bisa langsung diakses
$mango->setWarna('Yellow');         // Protected → diisi lewat setter
$mango->setBerat('300');            // Private → diisi lewat setter

// ✅ Menampilkan informasi menggunakan echo
// Warna dan Berat tidak bisa diakses langsung → gunakan getter
echo "Nama: " . $mango->nama . "<br>";             // Output langsung karena public
echo "Warna: " . $mango->getWarna() . "<br>";      // Output via getter
echo "Berat: " . $mango->getBerat() . " gram<br>"; // Output via getter
?>
