<!-- memanggil database -->
<?php
include "userpage/koneksi-kontak.php";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--  title icon -->
        <link rel="icon" href="assets/img/icon.png" type="image/x-icon">
        <title>BSIP</title>

        <!-- Custom fonts for this template-->
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    </head>

    <body>
        <?php

// Uji Jika Tombol Simpan Di Klik
if (isset($_POST['bsubmit'])) {
    $tgl = date('Y-m-d');

    // htmlspecialchars agar inputan lebih aman dari injection
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $telp = htmlspecialchars($_POST['telp'], ENT_QUOTES);
    $pesan = htmlspecialchars($_POST['pesan'], ENT_QUOTES);

    // Persiapan Query Simpan Data
    $kirim = mysqli_query($koneksi, "INSERT INTO tkontak values('', '$tgl', '$nama', '$email', '$telp', '$pesan')");

    // Uji JIka Simpan Data Sukses
    if ($kirim) {
        echo "<script>
        alert('Data Berhasil DiKirim..!');
        document.location='index.php'
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Dikirim..!');
        document.location='?'
        </script>";
    }
}

?>

        <!-- Bootstrap core JavaScript-->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="assets/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="assets/js/demo/chart-area-demo.js"></script>
        <script src="assets/js/demo/chart-pie-demo.js"></script>

    </body>

</html>