<?php

// Jualan Produk, Komik, Game

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function sayHello()
    {
        return "Hello World!";
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
var_dump($produk1);

$produk2 = new Produk();
var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Sasuke";
$produk3->tambahProperty = "HAHAHA";
var_dump($produk3);

$produk4 = new Produk();
$produk4->judul = "Sakura";
$produk4->penulis = "Masashi Kishimoto";
$produk4->penerbit = "Shonen Jump";
$produk4->harga = "50000";

echo "Komik : $produk4->judul, $produk4->penulis, $produk4->harga";
echo "<br>";
echo $produk4->sayHello();
echo "<br>";
echo $produk4->getLabel();

echo "<hr>";
$produk5 = new Produk();
$produk5->judul = "Uncharted";
$produk5->penulis = "Neil Druckmann";
$produk5->penerbit = "Sony Computer";
$produk5->harga = "100000";

echo "Komik : " . $produk4->getLabel();
echo "<br>";
echo "Game : " . $produk5->getLabel();
