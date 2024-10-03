<?php

class Siswa
{
    // deklarasikan atribut-atribut kelas Siswa
    public $nama;
    public $nisn;
    public $alamat;
    public $jurusan;
    public $tanggallahir;

    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($nama, $nisn, $alamat, $jurusan, $tanggallahir)
    {
        $this->nama = $nama;
        $this->nisn = $nisn;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
        $this->tanggallahir = $tanggallahir;
    }
    public function setNama()
    {
        return $this->nama;
    }
    public function setNisn()
    {
        return $this->nisn;
    }
    public function setAlamat()
    {
        return $this->alamat;
    }
    public function setJurusan()
    {
        return $this->jurusan;
    }
    public function setTanggallahir()
    {
        return $this->tanggallahir;
    }
    public function getNama() {
        return $this->nama;
    }
    public function getNisn() {
        return $this->nisn;
    }
    public function getAlamat() {
        return $this->alamat;
    }
    public function getJurusan() {
        return $this->jurusan;
    }
    public function getTanggallahir() {
        return $this->tanggallahir;
    }
    

    // buat metode untuk menghitung umur siswa
    public function hitungUmur($umur) {

        return $this->$umur * $this->tanggallahir;
    }
}

// buat dua buah objek siswa
$siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2006");
$siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2007");
echo "Nama: ". $siswa_1->nama . "<br>";
echo "Nisn: ". $siswa_1->nisn . "<br>";
echo "Alamat: ". $siswa_1->alamat . "<br>";
echo "Jurusan: ". $siswa_1->jurusan . "<br>";
echo "Tanggal Lahir: ". $siswa_1->tanggallahir . "<br> <br>";
echo "Nama: ". $siswa_2->nama . "<br>";
echo "Nisn: ". $siswa_2->nisn . "<br>";
echo "Alamat: ". $siswa_2->alamat . "<br>";
echo "Jurusan: ". $siswa_2->jurusan . "<br>";
echo "Tanggal Lahir: ". $siswa_2->tanggallahir . "<br> <br>";
echo "Bambang Lebih Tua dibandingan Bahrun.";
// contoh output:
// Bambang lebih tua dibandingkan Bahrun.