<!-- memanggil koneksi -->
<?php
include "koneksi-bukutamu.php";
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!--  title icon -->
        <link rel="icon" href="img/icon.png" type="image/x-icon">
        <title>BSIP | Buku Tamu</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <!-- time walk -->
        <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
        </script>

        <style type="text/css">
        .navbar-nav .nav-item .text-gray-700:hover {
            filter: brightness(0.5);
        }

        .navbar .pt-2 h3,
        .navbar-nav .pt-3 h4,
        .card-body .text-center h2,
        .copyright,
        li h5 b {
            cursor: default;
        }

        footer .row .ig:hover,
        footer .row .fb:hover,
        footer .row .tw:hover,
        footer .row .yt:hover {
            filter: brightness(0.8);
        }
        </style>
    </head>

    <body id="page-top" onload="startTime()">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="bukutamu.php"
                    title="Badan Standardisasi Instrumen Pertanian">
                    <div class="sidebar-brand-icon">
                        <img src="img/logo.png" width="50">
                        BSIP
                    </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Beranda -->
                <li class="nav-item">

                    <!-- tanggal -->
                    <h5 class="text-white mx-3 pt-3 text-center">
                        <b>
                            <span><?= date('d, M Y')?></span>
                        </b>
                    </h5>

                    <a class="nav-link" href="http://localhost/BSIP/" title="Beranda">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- sidebar menu -->
                <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo" title="Menu">
                        <i class="fas fa-fw fa-bars"></i>
                        <span>Menu</span>
                    </a>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pilihan :</h6>
                            <a class="collapse-item active" href="bukutamu.php" title="Buku Tamu">Buku
                                Tamu</a>
                            <a class="collapse-item" href="kuesioner.php" title="Kuesioner">Kuesioner</a>
                            <a class="collapse-item" href="registrasi.php" title="Registrasi">Registrasi</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- sidebar tentang -->
                <li class="nav-item">
                    <a class="nav-link" href="tentang.php" title="Tentang Kami">
                        <i class="fa fa-info-circle"></i>
                        <span>Tentang Kami</span></a>
                </li>

                <!-- sidebar kontak -->
                <li class="nav-item mb-3">
                    <a class="nav-link" href="kontak.php" title="Kontak Kami">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Kontak Kami</span></a>
                </li>

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>

                        <div class="pt-2">
                            <h3 class="text-gray-800"><b>Buku <span class="text-success">Tamu</span></b>
                            </h3>
                        </div>


                        <!-- time-walk -->
                        <div class="navbar-nav ml-auto">
                            <div class="pt-3">
                                <h4 id="txt">
                                </h4>
                            </div>
                        </div>

                        <!-- Topbar Navbar Bantuan -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link text-gray-700" href="#" onclick="Bantuan()" title="Butuh Bantuan?">
                                    <b>Bantuan</b>&nbsp;
                                    <i class="fa fa-question-circle"></i>
                                </a>
                                <form action="http://localhost/BSIP/bantuan.php" method="post">
                                    <div class="modal fade" id="Bantuan" tabindex="-1"
                                        aria-labelledby="exampleModalLable" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><b>Apa Yang Dapat Kami Bantu?</b></h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" style="color: red"><b>×</b></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-right">
                                                    <input type="text" name="nama" class="form-control"
                                                        placeholder="Masukkan nama anda..." required>
                                                    <input type="email" name="email" class="form-control mt-3"
                                                        placeholder="Masukkan alamat email anda..." required>
                                                    <input type="text" name="telp" class="form-control mt-3"
                                                        placeholder="Masukkan nomor telpon anda..." required>
                                                    <textarea class="form-control mt-3" name="pesan" rows="2"
                                                        placeholder="Apa Masalah Anda?" required></textarea>
                                                    <button class="btn btn-secondary mt-3" type="button"
                                                        data-dismiss="modal">
                                                        <i class="fas fa-fw fa-times"></i>
                                                        Batal</button>
                                                    <button type="submit" name="bsubmit" class="btn btn-primary mt-3"
                                                        title="Kirim data yang telah anda isi"><i
                                                            class="fa fa-paper-plane">
                                                        </i> Kirim</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>



                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- login ke admin -->
                            <li class="nav-item mt-3">
                                <a class="btn btn-outline-primary" href="http://localhost/BSIP/login.php"
                                    aria-haspopup="true" aria-expanded="false" title="Menuju ke halaman Admin">
                                    <i class="fa fa-user-circle"></i>
                                    <b>Admin</b>
                                </a>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid pb-lg-5">

                        <!-- Page Heading -->
                        <?php

// Uji Jika Tombol Simpan Di Klik
if (isset($_POST['bsimpan'])) {
    $tgl = date('Y-m-d');

    // htmlspecialchars agar inputan lebih aman dari injection
    $nama_lengkap = htmlspecialchars($_POST['nama_lengkap'], ENT_QUOTES);
    $instansi = htmlspecialchars($_POST['instansi'], ENT_QUOTES);
    $bertemu = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $keperluan = htmlspecialchars($_POST['tujuan'], ENT_QUOTES);

    // Persiapan Query Simpan Data
    $simpan = mysqli_query($koneksi, "INSERT INTO ttamu values('', '$tgl', '$nama_lengkap', '$instansi', '$bertemu', '$keperluan')");

    // Uji JIka Simpan Data Sukses
    if ($simpan) {
        echo "<script>alert('Simpan Data Sukses..!');
        document.location='?'</script>";
    } else {
        echo "<script>alert('Simpan Data GAGAL!!!');
        document.location='?'</script>";
    }
}

?>
                        <!-- Row -->
                        <div class="row justify-content-center">
                            <!-- col-lg-7 -->
                            <div class="col-lg-7 mb-3 mt-5">
                                <div class="card shadow-lg bg-light">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="text-center pb-4">
                                            <img src="img/logo.png" width="120">
                                            <h2>PENGISIAN DATA TAMU</h2>
                                        </div>
                                        <form class="user" method="POST">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                    name="nama_lengkap" placeholder="Nama Lengkap" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                    name="instansi" placeholder="Instansi" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="nama"
                                                    placeholder="Bertemu" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="tujuan"
                                                    placeholder="Keperluan" required>
                                            </div>

                                            <button type="submit" name="bsimpan"
                                                class="btn btn-primary btn-user btn-block"
                                                title="Simpan data yang anda isi">
                                                <i class="fa fa-download"></i>
                                                Simpan Data
                                            </button>

                                        </form>
                                        <hr>
                                    </div>
                                    <!-- end Card Body -->
                                </div>
                            </div>
                            <!-- endCol-lg-7 -->
                        </div>
                        <!-- endRow -->
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="row my-auto justify-content-center">

                        <!-- Topbar Navbar instagram -->
                        <div class="pr-3 ig"> <a href="https://www.instagram.com/balaipatp/"
                                class="btn bg-gray-200 btn-circle">
                                <img width="17" src="http://localhost/BSIP/assets/img/ig.png">
                            </a></div>

                        <!-- Topbar Navbar facebook -->
                        <div class="pr-3 ig"> <a href="https://www.facebook.com/balai.patp"
                                class="btn bg-gray-200 btn-circle">
                                <i class="fab fa-facebook-f" style="color: blue"></i>
                            </a></div>

                        <!-- Topbar Navbar twitter -->
                        <div class="pr-3 tw"> <a href="https://twitter.com/BalaiPATP"
                                class="btn bg-gray-200 btn-circle">
                                <i class="fab fa-twitter" style="color: #00acee"></i>
                            </a></div>

                        <!-- Topbar Navbar youtube -->
                        <a href="https://www.youtube.com/@balaipatp7383" class="btn bg-gray-200 btn-circle yt">
                            <i class="fab fa-youtube" style="color: red"></i>
                        </a>
                    </div>
                    <div class="copyright text-center mt-3">
                        <span>Copyright &copy; BSIP 2022 - <?=date('Y')?></span>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

        <!-- Bantuan -->
        <script>
        function Bantuan() {
            $('#Bantuan').modal('show');
        }
        </script>
    </body>

</html>