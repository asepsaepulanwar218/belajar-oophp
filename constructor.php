<?php   

class Anggota {
    public $nama, $alamat, $jenisKelamin;

    public function __construct($nama, $alamat, $jenisKelamin) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jenisKelamin = $jenisKelamin;
    }

    public function sayHello () {
        return "$this->nama, dari $this->alamat";
    }
}

$anggota1 = new Anggota('Saepul', 'Cilawu', 'Laki-laki');

// var_dump($anggota1); 

echo "Hi Saya ". $anggota1->nama . ", dari " . $anggota1->alamat;
echo '<br>';
echo "Hallo Saya " . $anggota1->sayHello();