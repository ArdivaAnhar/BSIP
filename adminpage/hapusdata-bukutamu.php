<?php

include "koneksi-bukutamu.php";

?>

<?php
if (isset($_GET['id']))
    mysqli_query($koneksi, "DELETE FROM ttamu WHERE id='$_GET[id]'");

echo "<script>alert('Hapus Data Sukses..!');
        document.location='tabel-bukutamu.php'</script>";
echo "<meta http-equiv=refresh content=2;URL='tabel-bukutamu.php'";
?>