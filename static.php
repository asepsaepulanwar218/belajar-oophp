<?php

class ContohStatic {
    public static $angka = 1;

    public static function halo () {
        return "Halo" . self::$angka++ . " kali";
    }
}

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Hai " . self::$angka++ . "<br>";
    }
}

echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

$obj2 = new Contoh;
echo "<hr>";
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

