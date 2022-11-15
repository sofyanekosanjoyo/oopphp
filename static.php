<?php

class ContohStatic
{
    public static $angka = 1;

    public static function cetakHalo()
    {
        // return "Halo." . $this->angka;
        return "Halo." . self::$angka++ . " kali.";
    }
}

echo ContohStatic::$angka;
echo "<hr>";
echo ContohStatic::cetakHalo();
echo "<hr>";
echo ContohStatic::cetakHalo();