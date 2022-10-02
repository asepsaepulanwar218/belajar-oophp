<?php   

class Anggota {
    public $nama, $alamat, $jenisKelamin, $simpananSukarela, $pinjaman, $tipe;

    public function __construct($nama, $alamat, $jenisKelamin, $simpananSukarela, $pinjaman, $tipe) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jenisKelamin = $jenisKelamin;
        $this->simpananSukarela = $simpananSukarela;
        $this->pinjaman = $pinjaman;
        $this->tipe = $tipe;
    }

    public function sayHello () {
        return "$this->nama, $this->alamat";
    }

    public function identitasLengkap () {
        if ($this->tipe == 'pasif') {
            $str = "Anggota Pasif <br>";
        } else {
            $str = "Anggota Aktif <br>";
        }

        $str .= "   Nama : {$this->nama} <br> 
                    Alamat : {$this->alamat} <br> 
                    Jenis Kelamin : {$this->jenisKelamin} <br>";
                    
                    
        if ($this->tipe == 'pasif') {
            $str .= "Simpanan Sukarela : Rp {$this->simpananSukarela} <br>";
            $str .= "Pinjaman : Rp {$this->pinjaman} <br>";
        }

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

$anggota1 = new Anggota('Saepul', 'Cilawu', 'Laki-laki', 250000, 0, 'pasif');
$anggota2 = new Anggota('Windi', 'Bandung', 'Perempuan',0,350000, 'aktif');

$cetakIdentitas1 = new cetakIdentitas ();
echo $cetakIdentitas1->cetak($anggota1);
echo '<br>';
echo $cetakIdentitas1->cetak($anggota2);
echo '<hr>';

echo $anggota1->identitasLengkap();
echo '<br>';
echo $anggota2->identitasLengkap();

