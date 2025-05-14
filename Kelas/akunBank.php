<?php

class akunBank
{
    // Variabel
    protected $accountNumber;
    protected $jmLUang;
    protected $nama; // Tambahkan variabel nama

    // Constructor
    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmLUang = $nominal;
    }

    // Getter dan Setter untuk nama
    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // Fungsi untuk menambahkan jumlah uang
    public function tambahUang($jumlah)
    {
        $this->jmLUang += $jumlah;
    }

    // Fungsi untuk mengurangi jumlah uang
    public function kurangiUang($jumlah)
    {
        $this->jmLUang -= $jumlah;
    }

    // Fungsi untuk menampilkan jumlah uang
    public function tampilkanUang()
    {
        return $this->jmLUang;
    }

    // Fungsi untuk menghitung pajak (11% dari jumlah uang)
    public function hitungPajak()
    {
        return $this->jmLUang * 0.11;
    }
}
?>