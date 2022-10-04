<?php

define ('NAMA','Asep Saepul Anwar'); //constant dg define ini hanya bisa diluar class, untuk variable global

echo NAMA;
echo "<br>";

const UMUR = 25; //cara yg ini bisa dipakai di dalam class atau function

echo UMUR;
echo "<br>";

class Coba {

    const NAMA2 = "Asep";
    public function tes() {
        return self::NAMA2;
    }
}

$obj = new Coba;
echo $obj->tes();

//php menyediakan magic constant, contohnya __LINE__, __FILE__
echo "<hr>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;