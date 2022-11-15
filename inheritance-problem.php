<?php

// Jualan Produk, Komik, Game

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jumlahHalaman,
        $waktuMain,
        $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function sayHello()
    {
        return "Hello World!";
    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }

    public function getInfoLengkap()
    {
        // Komik : Naruto | Mashasi Kishimoto, Shonen Jump, (Rp.30.000) ~ 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ~ ";
        if ($this->tipe == "Komik") {
            $str .= "{$this->jumlahHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= "{$this->waktuMain} Jam.";
        }

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

$produk1 = new Produk("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 50000, 0, 50, "Game");

// Komik : Naruto, Mashasi Kishimoto, Shonen Jump, 30000
// Game : Uncharted, Neil Druckmann, Sony Computer, 50000
// Naruto | Naruto, Mashasi Kishimoto, Shonen Jump, 30000 (Rp.30.000)

// Komik : Naruto | Mashasi Kishimoto, Shonen Jump, (Rp.30.000) ~ 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer, (Rp.30.000) ~ 50 Jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
