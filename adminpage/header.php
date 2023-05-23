<?php
include "koneksi-bukutamu.php";
?>

<?php

// membuat session start
session_start();

// uji jika sesion telah di set atau belum
if(empty($_SESSION['username']) or 
empty($_SESSION['password']) or 
empty($_SESSION['nama_pengguna'])){
    echo "<script>
            alert('Kesalahan! Untuk Mengakses Halaman ini anda Harus Login Terlebih Dahulu!');
            document.location = 'http://localhost/project/login.php';
        </script>";
}

?>