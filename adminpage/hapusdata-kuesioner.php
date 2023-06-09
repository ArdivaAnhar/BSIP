<?php

include "koneksi-kuesioner.php";

?>

<?php
if (isset($_GET['id']))
    mysqli_query($koneksi, "DELETE FROM tkuesio WHERE id='$_GET[id]'");

header("Location: tabel-kuesioner.php?alert=sukses");
        exit();
?>