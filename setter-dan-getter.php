<?php   

class Anggota {
    private $nama, $alamat, $jenisKelamin, $potongan = 0 ;

    public function setNama ($nama) {
        $this->nama = $nama;
    }

    public function getNama () {
        return $this->nama;
    }

    public function setAlamat ($alamat) {
        $this->alamat = $alamat;
    }

    public function getAlamat () {
        return $this->alamat;
    }

    public function setJenisKelamin ($jenisKelamin) {
        $this->jenisKelamin = $jenisKelamin;
    }

    public function getJenisKelamin () {
        return $this->jenisKelamin;
    }

    public function setPotongan ($potongan) {
        $this->potongan = $potongan;
    }

    public function getPotongan () {
        return $this->potongan;
    }

    public function __construct($nama, $alamat, $jenisKelamin) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jenisKelamin = $jenisKelamin;
    }

    public function sayHello () {
        return "$this->nama, $this->alamat";
    }

    protected function identitasLengkap () {

        $str = "   Nama : {$this->nama} <br> 
                    Alamat : {$this->alamat} <br> 
                    Jenis Kelamin : {$this->jenisKelamin} <br>";

        return $str;
    }
}

class anggotaAktif extends Anggota {
    private $pinjaman;
    
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
    private $simpananSukarela;

    public function __construct($nama, $alamat, $jenisKelamin, $simpananSukarela) {
        parent::__construct($nama, $alamat, $jenisKelamin);
        $this->simpananSukarela = $simpananSukarela;
    }

    public function identitasLengkap () {
            $str = "Anggota Pasif <br>" . parent::identitasLengkap() . 
                    "Simpanan Sukarela : Rp {$this->simpananSukarela} <br>";

        return $str;
    }

    public function getSimpanan () {
        return $this->simpananSukarela - (parent::getPotongan() * $this->simpananSukarela/100);
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
echo $anggota2->identitasLengkap();
echo '<hr>';

// $anggota1->simpananSukarela = 22000;
$anggota1->setPotongan(5);
echo $anggota1->getSimpanan();

