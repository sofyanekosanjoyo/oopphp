<?php

// Jualan Produk, Komik, Game

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jumlahHalaman,
        $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function sayHello()
    {
        return "Hello World!";
    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ~ ";

        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        //$str = "Komik : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ~ {$this->jumlahHalaman} Halaman.";
        $str = "Komik : " . parent::getInfoProduk() . " ~ {$this->jumlahHalaman} Halaman.";

        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";

        return $str;
    }
}

class CetakInfoProduk
{
    //public function cetak($produk)
    public function cetak(Produk $produk)
    {
        //$str = "Naruto | Mashasi Kishimoto, Shonen Jump (Rp.30.000)";
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.30.000)";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 55000, 0, 55);

// Komik : Naruto, Mashasi Kishimoto, Shonen Jump, 30000
// Game : Uncharted, Neil Druckmann, Sony Computer, 50000
// Naruto | Naruto, Mashasi Kishimoto, Shonen Jump, 30000 (Rp.30.000)

// Komik : Naruto | Mashasi Kishimoto, Shonen Jump, (Rp.30.000) ~ 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer, (Rp.30.000) ~ 50 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
