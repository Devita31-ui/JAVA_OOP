<?php

require_once('kelas/Manusia.php');

$sandi = new Manusia();
$sandi->setNama("Andi Pratama");
$sandi->setUmur(20); // contoh umur

$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(21); // contoh umur

$aku = new Manusia();
$aku->setNama("Devita Putri Kusumawati"); // Ganti dengan nama kamu
$aku->setUmur(21); // Ganti dengan umur kamu

// Tampilkan nama sandi
echo($sandi->getNama());
echo("<br>");

// Tampilkan nama budi
echo($budi->getNama());
echo("<br>");

// Tampilkan nama sendiri
echo($aku->getNama());
echo("<br>");

// Tampilkan NIK
echo($aku->getNIK());
echo("<br>");

// Tampilkan umur
echo("Umur: " . $aku->getUmur());
echo("<br>");
?>