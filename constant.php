<?php


// Define tidak bisa disimpan didalam kelas, harus global di luar kelas
define('NAMA', 'Sofyan Eko Sanjoyo');
echo NAMA;

echo "<hr>";

const UMUR = 31;
echo UMUR;

class Coba
{
    const NAMA = 'Sofyan E S';
}

echo "<hr>";
echo Coba::NAMA;

echo "<hr>";
echo __LINE__;

echo "<hr>";
echo __FILE__;

echo "<hr>";
function coba(){
    return __FUNCTION__;
}
echo coba();

echo "<hr>";
class Coba2{
    public $kelas = __CLASS__;
}
$obj = new Coba2();
echo $obj->kelas;