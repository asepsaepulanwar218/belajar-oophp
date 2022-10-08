<?php

require_once 'App/init.php';


$anggota1 = new anggotaPasif('Saepul', 'Cilawu', 'Laki-laki', 250000);
$anggota2 = new anggotaAktif('Windi', 'Bandung', 'Perempuan',350000);

$cetakAnggota = new cetakIdentitas();
$cetakAnggota->tambahAnggota($anggota1);
$cetakAnggota->tambahAnggota($anggota2);
echo $cetakAnggota->cetak();