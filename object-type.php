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

class cetakIdentitas {
    public function cetak (Anggota $anggota) {
        $str = "Nama          : {$anggota->nama} <br> 
                Alamat        : {$anggota->alamat} <br> 
                Jenis Kelamin : {$anggota->jenisKelamin} <br>";
                return $str;
    }
}

$anggota1 = new Anggota('Saepul', 'Cilawu', 'Laki-laki');
$anggota2 = new Anggota('Anggi', 'Cikarang', 'Perempuan');

// var_dump($anggota1); 

echo "Hi Saya ". $anggota1->nama . ", dari " . $anggota1->alamat;
echo '<br>';
echo "Hallo Saya " . $anggota2->sayHello();
echo '<br>';
echo '<br>';

$cetakIdentitas1 = new cetakIdentitas ();
echo $cetakIdentitas1->cetak($anggota1);
echo '<br>';
echo $cetakIdentitas1->cetak($anggota2);