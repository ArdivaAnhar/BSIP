<?php

include "koneksi-registrasi.php";

?>

<?php
if (isset($_GET['id']))
    mysqli_query($koneksi, "DELETE FROM tregis WHERE id='$_GET[id]'");

header("Location: tabel-registrasi.php?alert=sukses");
        exit();
?>