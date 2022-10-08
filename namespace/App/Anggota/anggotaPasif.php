<?php

class anggotaPasif extends Anggota implements identitasLengkap {
    private $simpananSukarela;

    public function __construct($nama, $alamat, $jenisKelamin, $simpananSukarela) {
        parent::__construct($nama, $alamat, $jenisKelamin);
        $this->simpananSukarela = $simpananSukarela;
    }
    
    public function getIdentitas () {

        $str = "    Nama : {$this->nama} <br> 
                    Alamat : {$this->alamat} <br> 
                    Jenis Kelamin : {$this->jenisKelamin} <br>";

        return $str;
    }

    public function identitasLengkap () {
            $str = "Anggota Pasif <br>" . $this->getIdentitas() . 
                    "Simpanan Sukarela : Rp {$this->simpananSukarela} <br>";

        return $str;
    }

    public function getSimpanan () {
        return $this->simpananSukarela - (parent::getPotongan() * $this->simpananSukarela/100);
    }
}