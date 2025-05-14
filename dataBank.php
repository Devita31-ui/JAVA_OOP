<?php
require_once('kelas/akunBank.php');

// Buat objek baru
$data1 = new akunBank(nomorAkun: "001", nominal: 10000);
$data2 = new akunBank(nomorAkun: "002", nominal: 10000);

// Contoh pakai fungsi
$data1->setNama("Bintang");
$data2->setNama("Devita");

// Tambah uang
$data1->tambahUang(4500);
$data2->tambahUang(3000);

// Kurangi uang
$data1->kurangiUang(500);
$data2->kurangiUang(1000);

// Tampilkan hasil
echo "Nama Akun 1: " . $data1->getNama() . "<br>";
echo "Saldo Akun 1: " . $data1->tampilkanUang() . "<br>";
echo "Pajak Akun 1: " . $data1->hitungPajak() . "<br><br>";

echo "Nama Akun 2: " . $data2->getNama() . "<br>";
echo "Saldo Akun 2: " . $data2->tampilkanUang() . "<br>";
echo "Pajak Akun 2: " . $data2->hitungPajak() . "<br>";
?>

