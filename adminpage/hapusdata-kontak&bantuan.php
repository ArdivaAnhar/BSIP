<?php

include "koneksi-kontak.php";

?>

<?php
if (isset($_GET['id']))
    mysqli_query($koneksi, "DELETE FROM tkontak WHERE id='$_GET[id]'");

header("Location: tabel-kontak&bantuan.php?alert=sukses");
        exit();
?>