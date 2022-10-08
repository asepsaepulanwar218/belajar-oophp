<?php

// require_once 'Anggota/identitasLengkap.php';
// require_once 'Anggota/Anggota.php';
// require_once 'Anggota/anggotaAktif.php';
// require_once 'Anggota/anggotaPasif.php';
// require_once 'Anggota/cetakIdentitas.php';


spl_autoload_register(function($class) {
    require_once __DIR__  . '/Anggota/' . $class . '.php';
});