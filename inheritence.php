<?php   

class Anggota {
    public $nama, $alamat, $jenisKelamin, $simpananSukarela, $pinjaman;

    public function __construct($nama, $alamat, $jenisKelamin, $simpananSukarela, $pinjaman) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jenisKelamin = $jenisKelamin;
        $this->simpananSukarela = $simpananSukarela;
        $this->pinjaman = $pinjaman;
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
    public function identitasLengkap () {
            $str = "Anggota Aktif <br>
                    Nama : {$this->nama} <br> 
                    Alamat : {$this->alamat} <br> 
                    Jenis Kelamin : {$this->jenisKelamin} <br>";

        return $str;
    }
}

class anggotaPasif extends Anggota {
    public function identitasLengkap () {
            $str = "Anggota Pasif <br>
                    Nama : {$this->nama} <br> 
                    Alamat : {$this->alamat} <br> 
                    Jenis Kelamin : {$this->jenisKelamin} <br>
                    Simpanan Sukarela : Rp {$this->simpananSukarela} <br>
                    Pinjaman : Rp {$this->pinjaman} <br>";

        return $str;
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

$anggota1 = new anggotaPasif('Saepul', 'Cilawu', 'Laki-laki', 250000, 0);
$anggota2 = new anggotaAktif('Windi', 'Bandung', 'Perempuan',0,350000);

echo $anggota1->identitasLengkap();
echo '<br>';
echo $anggota2->identitasLengkap();

