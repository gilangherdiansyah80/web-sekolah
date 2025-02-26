<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'web-sekolah';

    $conn = new mysqli($host, $user, $pass, $db);

    // cek koneksi
    if ( $conn -> connect_error) {
        echo "koneksi database gagal : " . $conn -> connect_error;
    } else {
        echo "koneksi database berhasil";
    }
?>