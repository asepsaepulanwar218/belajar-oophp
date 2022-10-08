<?php

abstract class Anggota {
    protected $nama, $alamat, $jenisKelamin, $potongan = 0 ;

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

    abstract public function getIdentitas();
}