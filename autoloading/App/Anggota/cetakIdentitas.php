<?php 

class cetakIdentitas {
    public $daftarAnggota = array();

    public function tambahAnggota ( Anggota $anggota) {
        $this->daftarAnggota[] = $anggota;
    }
    
    public function cetak () {
        $str = "DAFTAR ANGGOTA : <br><br>";

        foreach($this->daftarAnggota as $dA) {
            $str .= "{$dA->identitasLengkap()} <br>";
        }

        // $str = parent::identitasLengkap();
            return $str;
    }
}