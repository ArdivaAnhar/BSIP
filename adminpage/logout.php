<?php

// aktifkan session
session_start();

// menghapus session yg sudah di set
unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama_lengkap']);

// menghentikan session
session_destroy();

echo "<script>
                document.location = 'http://localhost/BSIP/index.php';
        </script>";