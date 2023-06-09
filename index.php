<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!--  title icon -->
        <link rel="icon" href="assets/img/icon.png" type="image/x-icon">
        <title>BSIP | Index</title>

        <!-- Custom fonts for this template-->
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

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
            };
            return i;
        }
        </script>

        <!-- slide show gambar -->
        <style type="text/css">
        .container-fluid {
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            height: 60vh;
            justify-content: center;
            overflow: hidden;
        }

        .image-container {
            width: 200px;
            height: 200px;
            transform-style: preserve-3d;
            transform: perspective(1000px) rotateY(0deg);
            transition: transform 1s;
        }

        .image-container span {
            color: white;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            transform: rotateY(calc(var(--i) * 45deg)) translateZ(400px);
        }

        .image-container span img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }

        .bton-container {
            position: relative;
            width: 80%;
            justify-content: space-between;
        }

        .bton {
            position: absolute;
            bottom: -80px;
            background-color: #1cc88a;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .bton:hover {
            filter: brightness(0.9);
        }

        #prev {
            left: 20%;
        }

        #next {
            right: 20%;
        }

        .card-body h2,
        p,
        .pt-5,
        .copyright,
        .pt-2 h3,
        .navbar-nav .pt-3 h4,
        li h5 b {
            cursor: default;
        }

        .lyn:hover {
            filter: brightness(0.5);
        }

        .navbar-nav .nav-item .bantuan:hover {
            filter: brightness(0.5);
        }

        footer .row .ig:hover,
        footer .row .fb:hover,
        footer .row .tw:hover,
        footer .row .yt:hover {
            filter: brightness(0.8);
        }

        .rm:hover {
            filter: brightness(1.4);
        }

        .modal-xl {
            max-width: 60%;
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

        <!-- Pop-up gambar -->
        <div class="modal fade" id="gambarPopUp" tabindex="-1" role="dialog" aria-labelledby="gambarPopUpLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-gray-800" id="gambarPopUpLabel" style="cursor: default;"><b><i
                                    class="fa fa-newspaper"></i>
                                Berita terkini</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                            <span aria-hidden="true" style="color: red;"><b>&times;</b></span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="https://bsip.pertanian.go.id/storage/assets/uploads/images/popup/umuOZOzr5JSo5VQFPZrtMniTnO5zq1zAMcBSLYVM.jpg"
                            class="img-fluid" alt="Gambar">
                        <i class="fa fa-angle-down mt-3"></i>
                        <br>
                        <a href="http://cybex.pertanian.go.id/mobile/artikel/100821/Sambut-PENAS-XVI-Tahun-2023-Kementan-Gelar-Rakor-Nasional/"
                            style="text-decoration: none;" class="rm text-gray-800"><b>
                                Read More</b></a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php"
                    title="Badan Standardisasi Instrumen Pertanian">
                    <div class="sidebar-brand-icon">
                        <img src="assets/img/logo.png" width="50">
                        BSIP
                    </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Beranda -->
                <li class="nav-item active">

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

                    <a class="nav-link" href="index.php" title="Beranda">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- sidebar menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages" title="Menu">
                        <i class="fas fa-fw fa-bars"></i>
                        <span>Menu</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pilihan :</h6>
                            <a class="collapse-item" href="userpage/bukutamu.php" title="Buku Tamu">Buku Tamu</a>
                            <a class="collapse-item" href="userpage/kuesioner.php" title="Kuesioner">Kuesioner</a>
                            <a class="collapse-item" href="userpage/registrasi.php" title="Registrasi">Registrasi</a>
                            <div class="collapse-divider"></div>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- sidebar tentang -->
                <li class="nav-item">
                    <a class="nav-link" href="userpage/tentang.php" title="Tentang Kami">
                        <i class="fa fa-info-circle"></i>
                        <span>Tentang Kami</span></a>
                </li>

                <!-- sidebar kontak -->
                <li class="nav-item mb-3">
                    <a class="nav-link" href="userpage/kontak.php" title="Kontak Kami">
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
                            <h3 class="text-gray-800"><b>Ber<span class="text-success">anda</span></b>
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
                                <form action="bantuan.php" method="post">
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

                            <!-- login ke admin -->
                            <li class="nav-item mt-3">
                                <a class="btn btn-outline-primary" href="login.php" aria-haspopup="true"
                                    aria-expanded="false" title="Menuju ke halaman Admin">
                                    <i class="fa fa-user-circle"></i>
                                    <b>Admin</b>
                                </a>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="image-container">
                            <span style="--i: 1">
                                <img width="300" height="130" class="shadow-lg" src="assets/img/img7.jpeg" />
                            </span>
                            <span style="--i: 2">
                                <img width="300" height="130" class="shadow-lg" src="assets/img/img8.jpeg" />
                            </span>
                            <span style="--i: 3">
                                <img width="300" height="130" class="shadow-lg" src="assets/img/img2.jpeg" />
                            </span>
                            <span style="--i: 4">
                                <img width="300" height="130" class="shadow-lg" src="assets/img/img3.jpeg" />
                            </span>
                            <span style="--i: 5">
                                <img width="300" height="130" class="shadow-lg" src="assets/img/img4.jpeg" />
                            </span>
                            <span style="--i: 6">
                                <img width="300" height="130" class="shadow-lg" src="assets/img/img5.jpeg" />
                            </span>
                            <span style="--i: 7">
                                <img width="300" height="130" class="shadow-lg" src="assets/img/img6.jpeg" />
                            </span>
                            <span style="--i: 8">
                                <img width="300" height="130" class="shadow-lg" src="assets/img/img1.jpeg" />
                            </span>
                        </div>
                        <div class="bton-container">
                            <button class="bton" id="prev" hidden><i class="fa fa-angle-left"></i></button>
                            <button class="bton" id="next" hidden><i class="fa fa-angle-right"></i></button>
                        </div>


                    </div>
                    <!-- /.container-fluid -->

                    <div class="card-body ml-3 mr-4">
                        <h2 class="text-gray-800"><b>Badan Standardisasi Instrumen Pertanian (BSIP)</b></h2>
                        <h5 class="text-primary ml-2"><b>Sejarah</b> (Singkat)</h5>
                        <p class="col-md-7">
                            <i>
                                Pembangunan pertanian memerlukan sebuah standar instrumen pertanian demi menjamin mutu
                                dari proses dan produk hasil pertanian. Badan Standardisasi Instrumen Pertanian (BSIP)
                                lahir pada 21 September 2022 melalui Peraturan Presiden Nomor 117 Tahun 2022 yang
                                memiliki tugas menyelenggarakan koordinasi, perumusan, penerapan, dan pemeliharaan,
                                serta harmonisasi standar instrumen pertanian.
                            </i>
                        </p>
                    </div>

                    <div class="pt-5">
                        <!-- Layanan -->
                        <h2 class="text-center mt-4 mb-3 text-gray-700"><b>Layanan Kami</b></h2>

                        <!-- lisensi -->
                        <div class="row justify-content-center">
                            <div class=" col-xl-3 col-md-6 m-4">
                                <div class="card border-bottom-primary shadow-lg h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters justify-content-center mb-2">
                                            <a href="#dsc" data-toggle="popover" title="Lisensi"
                                                data-content="Izin yang diberikan oleh pemilik Merek terdaftar kepada pihak lain berdasarkan perjanjian secara tertulis sesuai peraturan perundang-undangan untuk menggunakan Merek terdaftar.">
                                                <i class="fas fa-briefcase fa-3x lyn text-gray-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="text-center text-gray-700">Lisensi</h5>
                                </div>
                            </div>

                            <!-- pra lisensi -->
                            <div class="col-xl-3 col-md-6 m-4">
                                <div class="card border-bottom-primary shadow-lg h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters justify-content-center mb-2">
                                            <a href="#dsc" data-toggle="popover" title="Pra Lisensi"
                                                data-content="Pra lisensi menjadi salah satu upaya akselerasi alih teknologi yang menjadi amanah Balitbangtan.">
                                                <i class="fas fa-envelope fa-3x lyn text-gray-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="text-center text-gray-700">Pra Lisensi</h5>
                                </div>
                            </div>

                            <!-- HKI -->
                            <div class="col-xl-3 col-md-6 m-4">
                                <div class="card border-bottom-primary shadow-lg h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters justify-content-center mb-2">
                                            <a href="#dsc" data-toggle="popover" title="HKI"
                                                data-content="Hak kekayaan intelektual (HKI) didefinisikan sebagai hak untuk memperoleh perlindungan secara hukum atas kekayaan intelektual sesuai dengan peraturan perundang-undangan di bidang HKI, seperti UU Hak Cipta, Paten, Desain Industri, Rahasia Dagang, Varitas Tanaman, Sirkuit terpadu dan Merek serta telah disahkan oleh ITB melalui penerbitan SK Rektor Ketentuan Insentif Kekayaan Intelektual Institut Teknologi Bandung Nomor 643/I1.B04/SK-WRRIM/XI/2018.">
                                                <i class="fas fa-mail-bulk fa-3x lyn text-gray-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="text-center text-gray-700">HKI</h5>
                                </div>
                            </div>
                        </div>

                        <!-- promosi -->
                        <div class="row justify-content-center">
                            <div class=" col-xl-3 col-md-6 m-4">
                                <div class="card border-bottom-primary shadow-lg h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters justify-content-center mb-2">
                                            <a href="#dsc" data-toggle="popover" title="Promosi"
                                                data-content="Promosi atau promotion adalah cara untuk meningkatkan penjualan produk atau jasa yang biasanya dilakukan melalui iklan atau pemotongan harga, seperti diungkap Investopedia.">
                                                <i class="fas fa-hand-holding fa-3x lyn text-gray-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="text-center text-gray-700">Promosi</h5>
                                </div>
                            </div>

                            <!-- Inkubator -->
                            <div class="col-xl-3 col-md-6 m-4">
                                <div class="card border-bottom-primary shadow-lg h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters justify-content-center mb-2">
                                            <a href="#dsc" data-toggle="popover" title="Inkubator"
                                                data-content="Inkubator merupakan sebuah perangkat tertutup yang dapat mengoptimalkan suhu dan kelembapan agar organisme sel dapat berkembang dengan baik. ">
                                                <i class="fas fa-barcode fa-3x lyn text-gray-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="text-center text-gray-700">Inkubator</h5>
                                </div>
                            </div>

                            <!-- jurnal/warta litbang -->
                            <div class="col-xl-3 col-md-6 m-4">
                                <div class="card border-bottom-primary shadow-lg h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters justify-content-center mb-2">
                                            <a href="#dsc" data-toggle="popover" title="Jurnal / Warta Litbang"
                                                data-content="Warta Penelitian Perhubungan merupakan jurnal yang diterbitkan oleh Sekretariat Badan Litbang Perhubungan. Kontributor Warta Penelitian Perhubungan berasal dari kalangan Peneliti dan Akademisi di bidang transportasi.">
                                                <i class="fas fa-book-reader fa-3x lyn text-gray-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="text-center text-gray-700">Jurnal / Warta Litbang</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Administrasi -->
                        <div class="row justify-content-center">
                            <div class=" col-xl-3 col-md-6 m-4">
                                <div class="card border-bottom-primary shadow-lg h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters justify-content-center mb-2">
                                            <a href="#dsc" data-toggle="popover" title="Administrasi (Tata Usaha)"
                                                data-content="Administrasi merupakan salah satu bentuk usaha dan aktivitas yang berhubungan dengan pengaturan kebijakan agar dapat mencapai target maupun tujuan organisasi.">
                                                <i class="fas fa-tty fa-3x lyn text-gray-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="text-center text-gray-700">Administrasi (Tata Usaha)</h5>
                                </div>
                            </div>

                            <!-- Informasi -->
                            <div class="col-xl-3 col-md-6 m-4">
                                <div class="card border-bottom-primary shadow-lg h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters justify-content-center mb-2">
                                            <a href="#dsc" data-toggle="popover" title="Informasi"
                                                data-content="Informasi adalah keterangan, pernyataan, gagasan, dan tanda-tanda yang mengandung nilai, makna, dan pesan, baik data, fakta maupun penjelasannya yang dapat dilihat, didengar, dan dibaca.">
                                                <i class="fas fa-info-circle fa-3x lyn text-gray-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="text-center text-gray-700">Informasi</h5>
                                </div>
                            </div>

                            <!-- perpustakaan -->
                            <div class="col-xl-3 col-md-6 m-4">
                                <div class="card border-bottom-primary shadow-lg h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters justify-content-center mb-2">
                                            <a href="#dsc" data-toggle="popover" title="Perpustakaan"
                                                data-content="Perpustakaan adalah institusi yang mengumpulkan pengetahuan tercetak dan terekam, mengelolanya dengan cara khusus guna memenuhi kebutuhan intelektualitas para penggunanya melalui beragam cara interaksi pengetahuan.">
                                                <i class="fas fa-book-open fa-3x lyn text-gray-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="text-center text-gray-700">Perpustakaan</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="row my-auto justify-content-center">

                        <!-- Topbar Navbar instagram -->
                        <div class="pr-3 ig"> <a href="https://www.instagram.com/balaipatp/"
                                class="btn bg-gray-200 btn-circle">
                                <img width="17" src="assets/img/ig.png">
                            </a></div>

                        <!-- Topbar Navbar facebook -->
                        <div class="pr-3 fb"> <a href="https://www.facebook.com/balai.patp"
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

        <!-- Deskripsi -->
        <script>
        function Lisensi() {
            $('#Lisensi').modal('show');
        }

        function PraLisensi() {
            $('#PraLisensi').modal('show');
        }

        function HKI() {
            $('#HKI').modal('show');
        }

        function Promosi() {
            $('#Promosi').modal('show');
        }

        function Inkubator() {
            $('#Inkubator').modal('show');
        }

        function Jurnal() {
            $('#Jurnal').modal('show');
        }

        function Administrasi() {
            $('#Administrasi').modal('show');
        }

        function Informasi() {
            $('#Informasi').modal('show');
        }

        function Perpustakaan() {
            $('#Perpustakaan').modal('show');
        }

        function Bantuan() {
            $('#Bantuan').modal('show');
        }

        $(function() {
            $('[data-toggle="popover"]').popover({
                trigger: 'focus'
            });
        });
        </script>

        <!-- slide show gambar -->
        <script>
        const imageContainerE1 = document.querySelector(".image-container");

        const prevE1 = document.getElementById("prev");
        const nextE1 = document.getElementById("next");
        let x = 0;
        let timer;
        prevE1.addEventListener("click", () => {
            x = x + 45;
            clearTimeout(timer);
            updateGallery();
        });

        nextE1.addEventListener("click", () => {
            x = x - 45;
            clearTimeout(timer);
            updateGallery();
        });

        function updateGallery() {
            imageContainerE1.style.transform = `perspective(1000px) rotateY(${x}deg)`;
            timer = setTimeout(() => {
                x = x - 45;
                updateGallery();
            }, 2000);
        }

        updateGallery();
        </script>

        <script>
        $(document).ready(function() {
            $('#gambarPopUp').modal('show');
        });
        </script>

    </body>

</html>