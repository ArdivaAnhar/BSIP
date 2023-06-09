<?php
include "koneksi-registrasi.php";
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
        <title>BSIP | Registrasi</title>

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
        form h6,
        li h5 b {
            cursor: default;
        }

        footer .row .ig:hover,
        footer .row .fb:hover,
        footer .row .tw:hover,
        footer .row .yt:hover {
            filter: brightness(0.8);
        }

        /* side modal bantuan */
        .modal.right .modal-dialog {
            position: fixed;
            margin: auto;
            width: 320px;
            height: 100%;
            right: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            -o-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
        }

        .modal.right.show .modal-dialog {
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .modal.right .modal-content {
            height: 100%;
            overflow-y: auto;
        }

        .modal.right .modal-body {
            padding: 15px;
        }

        .modal.right .modal-footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 15px;
        }
        </style>
    </head>

    <body id="page-top" onload="startTime()">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="registrasi.php"
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

                    <!-- kalender -->
                    <h5 class="text-white mx-3 pt-3 text-center" id="tanggal" data-toggle="modal"
                        data-target="#myModal">
                        <b style="cursor: pointer;">
                            <?= date('d, M Y')?>
                        </b>
                    </h5>
                    <!-- Modal Kalendar -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="color: red;"><b>&times;</b></span>
                                    </button>
                                    <iframe src="https://calendar.google.com/calendar/embed?src=YOUR_CALENDAR_ID"
                                        style="border: 0" width="100%" height="400" frameborder="0"
                                        scrolling="no"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end kalender -->

                    <a class="nav-link" href="http://localhost/BSIP/">
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
                            <a class="collapse-item" href="bukutamu.php" title="Buku Tamu">Buku Tamu</a>
                            <a class="collapse-item" href="kuesioner.php" title="Kuesioner">Kuesioner</a>
                            <a class="collapse-item active" href="registrasi.php" title="Registrasi">Registrasi</a>
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
                            <h3 class="text-gray-800"><b>Regi<span class="text-success">strasi</span></b>
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
                                <a class="nav-link text-gray-700 bantuan" id="showSideModal" data-toggle="modal"
                                    data-target="#sideModal" title="Butuh Bantuan?" style="cursor: pointer;">
                                    <b>Bantuan</b>&nbsp;
                                    <i class="fa fa-question-circle"></i>
                                </a>
                                <!-- sideModal bantuan -->
                                <form action="http://localhost/BSIP/bantuan.php" method="post">
                                    <div class="modal right fade" id="sideModal" tabindex="-1" role="dialog"
                                        aria-labelledby="sideModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-gray-800" id="sideModalLabel">Apa
                                                        masalah anda?</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="text" name="nama" class="form-control pt-4 pb-4"
                                                        placeholder="Masukkan nama..." required>
                                                    <input type="email" name="email" class="form-control mt-3 pt-4 pb-4"
                                                        placeholder="Masukkan alamat email..." required>
                                                    <input type="text" name="telp" class="form-control mt-3 pt-4 pb-4"
                                                        placeholder="Masukkan nomor telpon..." required>
                                                    <textarea class="form-control mt-3" name="pesan" rows="3"
                                                        placeholder="Ketik pesan!" required></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tutup</button>
                                                    <button type="submit" name="bsubmit" class="btn btn-primary"
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

                            <!-- Nav Item - User Information -->
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
                    <div class="container-fluid">

                        <!-- page heading -->
                        <?php

// Uji Jika Tombol Simpan Di Klik
if (isset($_POST['bsimpan'])) {
    $tgl = date('Y-m-d');

    // htmlspecialchars agar inputan lebih aman dari injection
    $acara = htmlspecialchars($_POST['acara'], ENT_QUOTES);
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $instansi = htmlspecialchars($_POST['instansi'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $telp = htmlspecialchars($_POST['telp'], ENT_QUOTES);

    // Persiapan Query Simpan Data
    $simpan = mysqli_query($koneksi, "INSERT INTO tregis values('', '$tgl', '$acara', '$nama', '$instansi', '$email', '$telp')");

    // Uji JIka Simpan Data Sukses
    if ($simpan) {
        echo "<meta http-equiv=refresh content=2;URL='registrasi.php?alert=sukses'";
        } 

        // uji jika username dan password tidak ditemukan/ tidak sesuai
        else {
        // Jika login gagal, redirect ke halaman login dengan pesan gagal
        header("Location: registrasi.php?alert=gagal");
        exit();
        }
}

?>
                        <!-- Row -->
                        <div class="row justify-content-center">
                            <!-- col-lg-7 -->
                            <div class="col-lg-6 mb-3 pb-4 mt-5">
                                <div class="card shadow-lg bg-light">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="text-center pb-2">
                                            <img src="img/logo.png" width="120">
                                            <h2>PENGISIAN DATA ACARA</h2>
                                        </div>
                                        <?php
                                    // Periksa apakah ada pesan alert
                                    if (isset($_GET['alert'])) {
                                        $alert = $_GET['alert'];
                                        if ($alert == "gagal") {
                                        echo '<div class="alert alert-danger shadow" role="alert">Simpan data gagal!</div>';
                                        } elseif ($alert == "sukses") {
                                        echo '<div class="alert alert-success shadow" role="alert">Simpan data sukses! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><b>&times;</b></span>
                                    </button></div>';
                                    }
                                }
                            ?>
                                        <form class="user" method="POST">
                                            <div class="pl-3">
                                                <h6 class="text-gray-900">
                                                    Acara
                                                    <span style="color: red">*</span>
                                                </h6>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="acara"
                                                        id="acara1" value="Maulid Nabi" required>
                                                    <label class="form-check-label" for="acara1">
                                                        Maulid Nabi
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="acara"
                                                        id="acara2" value="Isra Mi'raj">
                                                    <label class="form-check-label" for="acara2">
                                                        Isra Mi'raj
                                                    </label>
                                                </div>
                                                <div class="form-check pb-3">
                                                    <input class="form-check-input" type="radio" name="acara"
                                                        id="acara3" value="Idul Fitri">
                                                    <label class="form-check-label" for="acara3">
                                                        Idul Fitri
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="nama"
                                                    placeholder="Nama Lengkap" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                    name="instansi" placeholder="Instansi" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" name="email"
                                                    placeholder="Alamat Email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control form-control-user" name="telp"
                                                    placeholder="No.Telp" required>
                                            </div>
                                            <button type="submit" name="bsimpan"
                                                class="btn btn-primary btn-user btn-block"
                                                title="Simpan data yang telah anda isi ">
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
                        <!-- end page heading -->


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

    </body>

</html>