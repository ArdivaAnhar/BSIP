<?php

include "koneksi-kontak.php";

?>

<?php
if (isset($_GET['id']))
    mysqli_query($koneksi, "DELETE FROM tkontak WHERE id='$_GET[id]'");

echo "<script>alert('Hapus Data Sukses..!');
        document.location='tabel-kontak&bantuan.php'</script>";
echo "<meta http-equiv=refresh content=2;URL='tabel-kontak&bantuan.php'";
?>