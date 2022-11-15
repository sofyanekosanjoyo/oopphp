<?php

// class ContohStatic
// {
//     public static $angka = 1;

//     public static function cetakHalo()
//     {
//         // return "Halo." . $this->angka;
//         return "Halo." . self::$angka++ . " kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<hr>";
// echo ContohStatic::cetakHalo();
// echo "<hr>";
// echo ContohStatic::cetakHalo();


class Contoh
{
    // public $angka = 1;
    public static $angka = 1;


    public function cetakHalo()
    {
        return "Halo. " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh();
echo $obj->cetakHalo();
echo $obj->cetakHalo();
echo $obj->cetakHalo();

echo "<hr>";
$obj2 = new Contoh();
echo $obj2->cetakHalo();
echo $obj2->cetakHalo();
echo $obj2->cetakHalo();
