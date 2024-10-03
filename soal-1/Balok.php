<?php
class Balok
{
    // deklarasikan atribut-atribut kelas Balok
    public $panjang;
    public $lebar;
    public $tinggi;
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($panjang, $lebar, $tinggi)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    public function setPanjang()
    {
        return $this->panjang;
    }
    public function setLebar()
    {
        return $this->lebar;
    }
    public function setTinggi()
    {
        return $this->tinggi;
    }
    public function getPanjang() {
        return $this->panjang;
    }
    public function getLebar() {
        return $this->lebar;
    }
    public function getTinggi() {
        return $this->tinggi;
    }
    
    // definisikan metode menghitung volume, luas permukaan, 
    public function hitungVolume()
    {
        return ($this->panjang * $this->lebar * $this->$tinggi);
    }
    public function hitungLuasPermukaan()
    {
        return 2*($this->panjang + $this->lebar + $this->$tinggi);
    }
}

$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);
// contoh output: Balok
echo "Balok 1 <br>";

// Balok 1
// Volume: 160
// Luas Permukaan: 184
echo "balok:".$balok_1->panjang . "<br>";
echo "Volume:".$balok_1->lebar . "<br>";
echo "Luas Permukaan:".$balok_1->tinggi . "<br> <br>";
// Balok 2
// Volume: 360
// Luas Permukaan: 372
echo "Balok 2 <br>";
echo "balok:".$balok_2->panjang . "<br>";
echo "Volume:".$balok_2->lebar . "<br>";
echo "Luas Permukaan:".$balok_2->tinggi . "<br>";