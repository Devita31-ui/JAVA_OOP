<?php
// ✅ Membuat class bernama 'buah2'
class buah2 {
    public $nama;   // ✅ Public: bisa diakses langsung dari luar class
    public $warna;  // ✅ Public: bisa diakses langsung dari luar class
    public $bobot;  // ✅ Public: bisa diakses langsung dari luar class

    // ✅ Method setter untuk nama
    // Tujuannya agar lebih rapi dan konsisten saat mengisi data
    public function set_name($n) {
        $this->nama = $n;
    }

    // ✅ Method setter untuk warna
    public function set_color($n) {
        $this->warna = $n;
    }

    // ✅ Method setter untuk bobot
    public function set_weight($n) {
        $this->bobot = $n;
    }
}

// ✅ Membuat objek baru dari class buah2
$mango = new buah2();

// ✅ Mengatur nilai properti menggunakan method setter
$mango->set_name('Mango');      // Mengatur nama buah menjadi "Mango"
$mango->set_color('Yellow');    // Mengatur warna buah menjadi "Yellow"
$mango->set_weight('300');      // Mengatur bobot buah menjadi "300"

// ✅ Menampilkan informasi dari objek mango
// Properti bersifat public, jadi bisa diakses langsung
echo "Nama: $mango->nama<br>";           // Output: Nama: Mango
echo "Warna: $mango->warna<br>";         // Output: Warna: Yellow
echo "Bobot: $mango->bobot gram";        // Output: Bobot: 300 gram
?>
