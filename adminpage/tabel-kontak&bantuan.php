<!-- memanggil koneksi database -->
<?php

include "koneksi-kontak.php";

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
        <title>BSIP | Data Buku Tamu</title>

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

        <!-- css -->
        <style type="text/css">
        @media print {

            .navbar-nav,
            .sidebar-brand,
            .sidebar-divider,
            .nav-item,
            .nav-link,
            .navbar,
            .navbar-expand,
            .btn,
            .sticky-footer,
            .card-footer {
                display: none;
            }
        }

        .navbar-nav .nav-item .text-gray-700:hover {
            filter: brightness(0.5);
        }

        .navbar .pt-2 h3,
        .navbar-nav .pt-3 h4,
        .card-header h5,
        .copyright,
        li h5 b,
        .float-right {
            cursor: default;
        }

        footer .row .ig:hover,
        footer .row .fb:hover,
        footer .row .tw:hover,
        footer .row .yt:hover {
            filter: brightness(0.8);
        }

        li a .img:hover {
            filter: brightness(0.1);
        }

        form .row .col-md-6 input {
            cursor: pointer;
        }
        </style>

    </head>

    <body id="page-top" onload="startTime()">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center"
                    href="tabel-kontak&bantuan.php">
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

                    <a class="nav-link" href="beranda.php">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- sidebar tabel -->
                <li class="nav-item active mb-3">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-calendar"></i>
                        <span>Rekapitulasi Data</span>
                    </a>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pilihan :</h6>
                            <a class="collapse-item" href="tabel-bukutamu.php">Buku Tamu</a>
                            <a class="collapse-item" href="tabel-kuesioner.php">Kuesioner</a>
                            <a class="collapse-item" href="tabel-registrasi.php">Registrasi</a>
                            <a class="collapse-item active" href="tabel-kontak&bantuan.php">Kontak & Bantuan</a>
                        </div>
                    </div>
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
                            <h3 class="text-gray-800"><b>Kontak <span class="text-success">& </span>Bantuan</b>
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
                                <form action="bantuan.php" method="post">
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

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img width="40" class="img" src="img/logout.png">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <!-- Data Pengunjung Hari Ini -->
                        <div class="container col-xl-6">
                            <div class="card shadow-lg mb-4">
                                <div class="card-header text-center">
                                    <h5 class="font-weight-bold text-gray-700">Data Kontak & Bantuan</h5>
                                </div>
                                <div class="card-body text-center">

                                    <form method="POST">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label>Dari Tanggal</label>
                                                <input class="form-control p" type="date" name="tanggal1"
                                                    value="<?= isset($_POST['tanggal1']) ? $_POST['tanggal1'] : date('d-m-Y') ?>"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Hingga Tanggal</label>
                                                <input class="form-control p" type="date" name="tanggal2"
                                                    value="<?= isset($_POST['tanggal2']) ? $_POST['tanggal2'] : date('d-m-Y') ?>"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-10 mb-3 pl-5"><button class="btn btn-primary"
                                                    name="btampilkan">
                                                    <i class="fa fa-search"></i>
                                                    Tampilkan
                                                </button>
                                            </div>
                                            <div class="col-md-6 col-sm-10 pr-5">
                                                <button onclick="window.print()" class="btn btn-outline-secondary"><i
                                                        class="fa fa-file-pdf"></i> Print to
                                                    Pdf</button>
                                            </div>

                                        </div>
                                    </form>

                                    <?php
                            if (isset($_POST['btampilkan'])) :

                            ?>

                                    <?php

                                            $tgl1 = $_POST['tanggal1'];
                                            $tgl2 = $_POST['tanggal2'];

                                            $tampil = mysqli_query($koneksi, "SELECT * FROM tkontak where tanggal BETWEEN '$tgl1' and '$tgl2' order by id desc");
                                            $no = 1;

                                            while ($data = mysqli_fetch_array($tampil)) {
                                            ?>

                                    <div class="card text-left bg-gray-200 mb-3 mt-3">
                                        <h5 class="mt-3 ml-3"><b>Nama : <?= $data['nama'] ?></b></h5>
                                        <h5 class="ml-3">Email &nbsp;&nbsp;: <?= $data['email'] ?></h5>
                                        <h5 class="ml-3">Telp &nbsp; &nbsp;&nbsp;: <?= $data['telp'] ?></h5>
                                        <h5 class="mb-3 ml-3">Pesan &nbsp;: "<?= $data['pesan'] ?>"</h5>
                                        <div class="card-footer bg-white">
                                            <a href="hapusdata-kontak&bantuan.php?id=<?= $data['id']; ?>"
                                                class="btn btn-danger"><i class="fa fa-trash"></i>
                                                Hapus Data
                                            </a>
                                            <div class="float-right">
                                                <h6></h6><?= date('d-m-Y') ?></h6>
                                            </div>
                                        </div>
                                    </div>



                                    <?php } ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

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
                                <img width="17" src="img/ig.png">
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

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Keluar</b></h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color: red;"><b>×</b></span>
                        </button>
                    </div>
                    <div class="modal-body">Apakah Anda Yakin Ingin Keluar Dari Halaman Administrator?
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-primary" type="button" data-dismiss="modal">
                            <i class="fas fa-fw fa-times"></i>
                            Cancel</button>
                        <a class="btn btn-outline-danger" href="logout.php"><i class="fa fa-sign-out-alt"></i>
                            Logout</a>
                    </div>
                </div>
            </div>
        </div>

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