<?php

// Jualan Produk, Komik, Game

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function sayHello()
    {
        return "Hello World!";
    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
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

$produk1 = new Produk("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 50000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
