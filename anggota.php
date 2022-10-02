<?php   

class Anggota {
    public $nama, $alamat, $jenisKelamin;

    public function sayHello () {
        return "$this->nama, dari $this->alamat";
    }
}

$anggota1 = new Anggota();
$anggota1->nama = 'Asep';
$anggota1->alamat = 'Garut';

//var_dump($anggota1);

echo "Hi Saya ". $anggota1->nama . ", dari " . $anggota1->alamat;
echo '<br>';
echo "Hallo Saya " . $anggota1->sayHello();