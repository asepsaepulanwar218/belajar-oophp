<?php

// require_once 'Anggota/identitasLengkap.php';
// require_once 'Anggota/Anggota.php';
// require_once 'Anggota/anggotaAktif.php';
// require_once 'Anggota/anggotaPasif.php';
// require_once 'Anggota/cetakIdentitas.php';
// require_once 'Anggota/User.php';

// require_once 'Pengurus/User.php';


spl_autoload_register(function($class) {
    $class = explode('\\',$class);
    $class = end($class);
    require_once __DIR__  . '/Anggota/' . $class . '.php';
});

spl_autoload_register(function($class) {
    $class = explode('\\',$class);
    $class = end($class);
    require_once __DIR__  . '/Pengurus/' . $class . '.php';
});