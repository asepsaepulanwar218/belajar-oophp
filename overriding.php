<?php   

class Anggota {
    public $nama, $alamat, $jenisKelamin;

    public function __construct($nama, $alamat, $jenisKelamin) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jenisKelamin = $jenisKelamin;
    }

    public function sayHello () {
        return "$this->nama, $this->alamat";
    }

    public function identitasLengkap () {

        $str = "   Nama : {$this->nama} <br> 
                    Alamat : {$this->alamat} <br> 
                    Jenis Kelamin : {$this->jenisKelamin} <br>";

        return $str;
    }
}

class anggotaAktif extends Anggota {
    public $pinjaman;
    
    public function __construct($nama, $alamat, $jenisKelamin, $pinjaman) {
    parent:: __construct($nama, $alamat, $jenisKelamin) ;
        $this->pinjaman = $pinjaman;
    }

    public function identitasLengkap () {
            $str = "Anggota Aktif <br>" . parent::identitasLengkap() .
            "Pinjaman : Rp {$this->pinjaman} <br>";

        return $str;
    }
}

class anggotaPasif extends Anggota {
    public $simpananSukarela;

    public function __construct($nama, $alamat, $jenisKelamin, $simpananSukarela) {
        parent::__construct($nama, $alamat, $jenisKelamin);
        $this->simpananSukarela = $simpananSukarela;
    }

    public function identitasLengkap () {
            $str = "Anggota Pasif <br>" . parent::identitasLengkap() . 
                    "Simpanan Sukarela : Rp {$this->simpananSukarela} <br>";

        return $str;
    }
}

class cetakIdentitas {
    public function cetak (Anggota $anggota) {
        $str = parent::identitasLengkap();
                return $str;
    }
}

$anggota1 = new anggotaPasif('Saepul', 'Cilawu', 'Laki-laki', 250000);
$anggota2 = new anggotaAktif('Windi', 'Bandung', 'Perempuan',350000);

echo $anggota1->identitasLengkap();
echo '<br>';
echo '<br>';
echo $anggota2->identitasLengkap();

