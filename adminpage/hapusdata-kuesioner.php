<?php

include "koneksi-kuesioner.php";

?>

<?php
if (isset($_GET['id']))
    mysqli_query($koneksi, "DELETE FROM tkuesio WHERE id='$_GET[id]'");

echo "<script>alert('Hapus Data Sukses..!');
        document.location='tabel-kuesioner.php'</script>";
echo "<meta http-equiv=refresh content=2;URL='tabel-kuesioner.php'";
?>