<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_login";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>