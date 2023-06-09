<?php

// aktifkan session
session_start();

// panggil koneksi database
include "koneksi.php";

@$pass = md5($_POST['password']);
@$username = mysqli_escape_string($koneksi, $_POST['username']);
@$password = mysqli_escape_string($koneksi, $pass);

$login = mysqli_query($koneksi, "SELECT * FROM tuser where username = '$username' and password = '$password' and status = 'Aktif' ");

$data = mysqli_fetch_array($login);

// uji jika username dan password ditemukan/sesuai
if ($data){
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['nama_pengguna'] = $data['nama_pengguna'];

    // mengarahkan ke halaman admin
    header("Location: adminpage/beranda.php?alert=sukses");
        exit();
} 

// uji jika username dan password tidak ditemukan/ tidak sesuai
else {
        // Jika login gagal, redirect ke halaman login dengan pesan gagal
        header("Location: login.php?alert=gagal");
        exit();
    }