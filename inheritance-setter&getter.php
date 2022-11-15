<?php

// Jualan Produk, Komik, Game

class Produk
{
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon;

    // protected $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit";
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ";

        return $str;
    }
}

class Komik extends Produk
{
    public $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoProduk()
    {
        //$str = "Komik : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ~ {$this->jumlahHalaman} Halaman.";
        $str = "Komik : " . parent::getInfoProduk() . " ~ {$this->jumlahHalaman} Halaman.";

        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";

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

$produk1 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 55000, 55);

// Komik : Naruto, Mashasi Kishimoto, Shonen Jump, 30000
// Game : Uncharted, Neil Druckmann, Sony Computer, 50000
// Naruto | Naruto, Mashasi Kishimoto, Shonen Jump, 30000 (Rp.30.000)

// Komik : Naruto | Mashasi Kishimoto, Shonen Jump, (Rp.30.000) ~ 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer, (Rp.30.000) ~ 50 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
$produk1->setDiskon(20);
echo $produk2->getHarga();
echo "<hr>";

$produk3 = new Produk("BarangBaru");

$produk1->setJudul("JudulBaru");
echo $produk1->getJudul();
echo "<br>";
echo $produk2->getJudul();
echo "<br>";
$produk2->setJudul("Sofyan Eko Sanjoyo");
echo $produk2->getJudul();
