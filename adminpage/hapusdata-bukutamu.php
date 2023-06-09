<?php

include "koneksi-bukutamu.php";

?>

<?php
if (isset($_GET['id']))
    mysqli_query($koneksi, "DELETE FROM ttamu WHERE id='$_GET[id]'");
    
header("Location: tabel-bukutamu.php?alert=sukses");
        exit();
?>