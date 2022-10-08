<?php

class anggotaAktif extends Anggota implements identitasLengkap {
    private $pinjaman;
    
    public function __construct($nama, $alamat, $jenisKelamin, $pinjaman) {
    parent:: __construct($nama, $alamat, $jenisKelamin) ;
        $this->pinjaman = $pinjaman;
    }
    
    public function getIdentitas () {

        $str = "    Nama : {$this->nama} <br> 
                    Alamat : {$this->alamat} <br> 
                    Jenis Kelamin : {$this->jenisKelamin} <br>";

        return $str;
    }

    public function identitasLengkap () {
            $str = "Anggota Aktif <br>" . $this->getIdentitas() .
            "Pinjaman : Rp {$this->pinjaman} <br>";

        return $str;
    }
}