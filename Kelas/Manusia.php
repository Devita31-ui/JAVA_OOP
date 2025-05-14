<?php

class Manusia
{
    // Deklarasi Variabel
    protected $name;
    protected $nik = "123212131243243";
    protected $umur; // Tambahkan umur

    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    // Getter dan Setter untuk umur
    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    // Ubah getNIK jadi public supaya bisa dipanggil
    public function getNIK()
    {
        return "NIK: {$this->nik}";
    }
}
?>