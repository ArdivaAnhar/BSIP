<?php

include "koneksi-registrasi.php";

?>

<?php
if (isset($_GET['id']))
    mysqli_query($koneksi, "DELETE FROM tregis WHERE id='$_GET[id]'");

echo "<script>alert('Hapus Data Sukses..!');
        document.location='tabel-registrasi.php'</script>";
echo "<meta http-equiv=refresh content=2;URL='tabel-registrasi.php'";
?>