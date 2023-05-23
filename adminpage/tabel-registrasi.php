<!-- memanggil koneksi database -->
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
        <title>BSIP | Data Registrasi</title>

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
        .card-body .text-center h1,
        .card-header h5,
        .copyright,
        li h5 b,
        .statistik {
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

        form .row .col-md-3 .form-group input {
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
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="tabel-registrasi.php">
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

                <!-- sidebar data -->
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
                            <a class="collapse-item active" href="tabel-registrasi.php">Registrasi</a>
                            <a class="collapse-item" href="tabel-kontak&bantuan.php">Kontak & Bantuan</a>
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

                        <!-- Topbar Navbar instagram -->
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
                        <!-- statistik pengunjung -->
                        <!-- container -->
                        <div class="container col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <!-- Card -->
                            <div class="card shadow-lg">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-700 mb-4"><b>Statistik Pengunjung Acara</b></h1>
                                    </div>
                                    <?php
                // deklarasi tanggal
                // menampilkan tanggal sekarang
                $tgl_sekarang = date('Y-m-d');

                // menampilkan tanggal kemarin
                $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

                // menampilkan 6 hari sebelum tanggal sekarang
                $seminggu = date('Y-m-d h:i:s', strtotime('-1 week +1 day', strtotime($tgl_sekarang)));

                $sekarang = date('Y-m-d h:i:s');

                // deklarasi bulan
                // menampilan bulan
                $bulan_ini = date('m');

                // persiapan query tampilkan jumlah data pengunjung
                $tgl_sekarang = mysqli_fetch_array(mysqli_query(
                    $koneksi,
                    "SELECT count(*) FROM tregis where tanggal like '%$tgl_sekarang%' "
                ));

                $kemarin = mysqli_fetch_array(mysqli_query(
                    $koneksi,
                    "SELECT count(*) FROM tregis where tanggal like '%$kemarin%' "
                ));

                $seminggu = mysqli_fetch_array(mysqli_query(
                    $koneksi,
                    "SELECT count(*) FROM tregis where tanggal BETWEEN '$seminggu' and 
                        '$sekarang'"
                ));

                $sebulan = mysqli_fetch_array(mysqli_query(
                    $koneksi,
                    "SELECT count(*) FROM tregis where month(tanggal) = '$bulan_ini'"
                ));

                $keseluruhan = mysqli_fetch_array(mysqli_query(
                    $koneksi,
                    "SELECT count(*) FROM tregis"
                ));

                ?>
                                    <table class="table table-bordered statistik">
                                        <tr>
                                            <td>
                                                <i class="fa fa-users" style="color: #6495ED"></i>
                                                &ensp;Hari Ini
                                            </td>
                                            <td>: <?= $tgl_sekarang[0] ?></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-calendar" style="color: #6495ED"></i>
                                                &ensp; Kemarin
                                            </td>
                                            <td>: <?= $kemarin[0] ?></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-folder-open" style="color: #6495ED"></i>
                                                &ensp;Minggu Ini
                                            </td>
                                            <td>: <?= $seminggu[0] ?></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa  fa-folder" style="color: #6495ED"></i>
                                                &ensp;Bulan Ini
                                            </td>
                                            <td>: <?= $sebulan[0] ?></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-archive" style="color: #6495ED"></i>
                                                &ensp;Keseluruhan
                                            </td>
                                            <td>: <?= $keseluruhan[0] ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <!--  end Card Body -->
                            </div>
                            <!-- end Card -->
                        </div>
                        <!-- end container -->

                        <!-- Data Pengunjung Hari Ini -->
                        <div class="card shadow-lg mb-4">
                            <div class="card-header py-3 text-center">
                                <h5 class="m-0 font-weight-bold text-primary">Data Pengunjung Acara</h5>
                            </div>
                            <div class="card-body">

                                <form method="POST" class="text-center">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="text-gray-800">Dari Tanggal</label>
                                                <input class="form-control" type="date" name="tanggal1"
                                                    value="<?= isset($_POST['tanggal1']) ? $_POST['tanggal1'] : date('d-m-Y') ?>"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="text-gray-800">Hingga Tanggal</label>
                                                <input class="form-control" type="date" name="tanggal2"
                                                    value="<?= isset($_POST['tanggal2']) ? $_POST['tanggal2'] : date('d-m-Y') ?>"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5"></div>
                                        <div class="col-md-2">
                                            <button class="btn btn-primary form-control" name="btampilkan">
                                                <i class="fa fa-search"></i>
                                                Tampilkan
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <?php
                            if (isset($_POST['btampilkan'])) :

                            ?>

                                <br>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th>Acara</th>
                                                <th>Nama Lengkap</th>
                                                <th>Instansi</th>
                                                <th>Email</th>
                                                <th>No.Telp</th>
                                                <th class="text-center"><i class="fa fa-trash fa-lg"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $tgl1 = $_POST['tanggal1'];
                                            $tgl2 = $_POST['tanggal2'];

                                            $tampil = mysqli_query($koneksi, "SELECT * FROM tregis where tanggal BETWEEN '$tgl1' and '$tgl2' order by id desc");
                                            $no = 1;

                                            while ($data = mysqli_fetch_array($tampil)) {
                                            ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['tanggal'] ?></td>
                                                <td><?= $data['acara'] ?></td>
                                                <td><?= $data['nama'] ?></td>
                                                <td><?= $data['instansi'] ?></td>
                                                <td><?= $data['email'] ?></td>
                                                <td><?= $data['telp'] ?></td>
                                                <td class="text-center"><a
                                                        href="hapusdata-registrasi.php?id=<?= $data['id']; ?>"
                                                        class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                    <!-- Export Data Ke Excel -->
                                    <center>
                                        <form method="POST" action="exportexcel-registrasi.php">
                                            <div class="col-md-4">
                                                <input type="hidden" name="tanggala" value="<?= @$_POST['tanggal1'] ?>">
                                                <input type="hidden" name="tanggalb" value="<?= @$_POST['tanggal2'] ?>">
                                                <button class="btn btn-success form-control" name="bexport">
                                                    <i class="fa fa-download"></i>
                                                    Export Data Excel
                                                </button>
                                            </div>
                                        </form>
                                    </center>

                                </div>
                                <?php endif; ?>
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