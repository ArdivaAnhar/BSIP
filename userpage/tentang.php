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
        <title>BSIP | Tentang</title>

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

        .navbar .pt-3,
        .navbar-nav .pt-3 h4,
        .container-fluid,
        .copyright,
        li h5 b {
            cursor: default;
        }

        footer .row .ig:hover,
        footer .row .fb:hover,
        footer .row .tw:hover,
        footer .row .yt:hover,
        .modal-footer .ig:hover,
        .modal-footer .fb:hover,
        .modal-footer .tw:hover {
            filter: brightness(0.8);
        }

        .bulat .image {
            display: inline-block;
            border-radius: 50%;
            width: 200px;
            height: 200px;
            margin: auto;
        }

        .bulat .hover:hover {
            filter: brightness(0.7);
        }

        .section-heading,
        .col-md-3 h4,
        .container-fluid h2 {
            font-family: 'Times New Roman', Times, serif;
        }

        .prf {
            padding-top: 55px;
        }

        .col-md-5 a img,
        .button {
            cursor: zoom-in;
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
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="tentang.php"
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

                    <a class="nav-link" href="http://localhost/BSIP/" title="Beranda">
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
                            <a class="collapse-item" href="bukutamu.php" title="Buku Tamu">Buku
                                Tamu</a>
                            <a class="collapse-item" href="kuesioner.php" title="Kuesioner">Kuesioner</a>
                            <a class="collapse-item" href="registrasi.php" title="Registrasi">Registrasi</a>
                            <div class="collapse-divider"></div>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- sidebar tentang -->
                <li class="nav-item active">
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

                        <div class="pt-3">
                            <h3 class="text-gray-800"><b>Tentang <span class="text-success">Kami</span></b></h3>
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
                                    aria-haspopup="true" aria-expanded="false" titel="Menuju ke halaman Admin">
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
                        <!-- profile ketua balai -->
                        <h2 class="text-gray-700 mt-5">Dr. Ir. I Ketut Gede Mudiarta, M.Si</h2>
                        <div class="row">

                            <div class="col-md-5 mb-5">
                                <a href="#ketua" onclick="Ketua()">
                                    <img src="img/ketua.jpeg" height="650" class="shadow-lg">
                                </a>
                                <div class="modal fade" id="Ketua" tabindex="-1" aria-labelledby="exampleModalLable"
                                    aria-hidden="true">
                                    <button class="close mr-5 mt-3" type="button" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true" style="color: white;"><b class="h1">×</b></span>
                                    </button>
                                    <div class="modal-dialog">
                                        <div class="modal-body text-center">
                                            <img src="img/ketua.jpeg" width="400" cl>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 text-gray-800 mb-5 mt-3">
                                <b>
                                    <h4>
                                        <i>
                                            Biografi: Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                                            aut
                                            dignissimos odio sit tempore id repellat provident, nihil qui tenetur.
                                            Delectus
                                            facere adipisci ipsum natus explicabo, molestias quasi commodi voluptatum,
                                            velit
                                            vel quas, maxime dignissimos libero repudiandae modi nemo alias. Vel sint
                                            omnis
                                            fuga est ipsam. Placeat libero, laudantium eum quis commodi atque officiis
                                            eaque
                                            beatae. Est aliquam magni mollitia placeat ab exercitationem officiis
                                            impedit
                                            doloribus ullam in repudiandae, unde quibusdam fugiat alias aperiam a!
                                            Praesentium, optio dolores. Amet pariatur ducimus eaque. Veniam, fuga at
                                            atque
                                            quas culpa voluptatum debitis libero nobis consequuntur officiis, eveniet
                                            corrupti possimus corporis dolor maiores aperiam eos ab velit quia tenetur.
                                            Qui,
                                            quos quisquam, vero accusantium ratione nobis iure exercitationem magni
                                            velit
                                            optio ipsum corrupti incidunt. Ducimus dolorum totam cumque praesentium,
                                            commodi
                                            quod voluptatem ad! Qui accusantium consequatur maiores at. Aliquam enim
                                            quam
                                            sit sint?
                                        </i>
                                    </h4>
                                </b>
                            </div>
                        </div>

                        <!-- petinggi -->
                        <h2 class="section-heading text-uppercase text-center mt-5 mb-4 text-gray-800"><b>
                                Struktur Organisasi</b></h2>
                        <div class="row justify-content-center text-center">

                            <!-- Profil 1 -->
                            <div class="col-md-3 mr-5 mb-5 mt-5">
                                <span class="bulat">
                                    <a href="#profil" onclick="Image1()">
                                        <img class="image hover shadow-lg" src="img/bpatp1.jpg"></a>
                                    <h4 class="mt-2 text-gray-800"><b>Kania Tresnawati, S.T.P</b></h4>
                                    <h6>Subkoordinator Pelayanan Alih
                                        Teknologi</h6>

                                    <div class="modal fade prf" id="Image1" tabindex="-1"
                                        aria-labelledby="exampleModalLable" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" style="color: red"><b>×</b></span>
                                                    </button>
                                                    <span class="bulat">
                                                        <img class="image mt-4" src="img/bpatp1.jpg">
                                                        <h4 class="mt-2 text-gray-800"><b>Mas Elon</b></h4>
                                                        <h5 class="text-gray-700">Subkoordinator Pelayanan Alih
                                                            Teknologi</h5>
                                                        <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Hic consequatur perspiciatis, voluptatum quam nesciunt
                                                                mollitia placeat eius accusamus quidem voluptates!</i>
                                                        </p>
                                                    </span>

                                                    <div class="modal-footer justify-content-center">

                                                        <!-- Topbar Navbar WhatsApp -->
                                                        <div class="tw"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <i class="fab fa-whatsapp"
                                                                    style="color: springgreen;"></i>
                                                            </a></div>

                                                        <!-- Topbar Navbar instagram -->
                                                        <div class="ig"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <img width="17"
                                                                    src="http://localhost/BSIP/assets/img/ig.png">
                                                            </a></div>

                                                        <!-- Topbar Navbar facebook -->
                                                        <div class="fb"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <i class="fab fa-facebook-f" style="color: blue"></i>
                                                            </a></div>

                                                        <!-- Topbar Navbar twitter -->
                                                        <div class="tw"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <i class="fab fa-twitter" style="color: #00acee"></i>
                                                            </a></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>

                            <!-- Profil 2 -->
                            <div class="col-md-3 mb-5">
                                <span class="bulat">
                                    <a href="#profil" onclick="Image2()">
                                        <img class="image hover shadow-lg"
                                            src="img/struktur organisasi bpatp 2022 oke.jpg">
                                    </a>
                                    <h4 class="mt-2 text-gray-800"><b>Dr. Ir. I Ketut Gede Mudiarta, M.Si</b></h4>
                                    <h6>Ketua Balai</h6>
                                    <div class="modal fade prf" id="Image2" tabindex="-1"
                                        aria-labelledby="exampleModalLable" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" style="color: red"><b>×</b></span>
                                                    </button>
                                                    <span class="bulat">
                                                        <img class="image mt-4"
                                                            src="img/struktur organisasi bpatp 2022 oke.jpg">
                                                        <h4 class="mt-2 text-gray-800"><b>Dr. Ir. I Ketut Gede Mudiarta,
                                                                M.Si</b></h4>
                                                        <h5 class="text-gray-700">Ketua Balai</h5>
                                                        <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Hic consequatur perspiciatis, voluptatum quam nesciunt
                                                                mollitia placeat eius accusamus quidem voluptates!</i>
                                                        </p>
                                                    </span>

                                                    <div class="modal-footer justify-content-center">

                                                        <!-- Topbar Navbar WhatsApp -->
                                                        <div class="tw"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <i class="fab fa-whatsapp"
                                                                    style="color: springgreen;"></i>
                                                            </a></div>

                                                        <!-- Topbar Navbar instagram -->
                                                        <div class="ig"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <img width="17"
                                                                    src="http://localhost/BSIP/assets/img/ig.png">
                                                            </a></div>

                                                        <!-- Topbar Navbar facebook -->
                                                        <div class="fb"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <i class="fab fa-facebook-f" style="color: blue"></i>
                                                            </a></div>

                                                        <!-- Topbar Navbar twitter -->
                                                        <div class="tw"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <i class="fab fa-twitter" style="color: #00acee"></i>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>

                            <!-- Profil 3 -->
                            <div class="col-md-3 ml-5 mb-5 mt-5">
                                <span class="bulat">
                                    <a href="#profil" onclick="Image3()">
                                        <img class="image hover shadow-lg" src="img/struktur organisasi bpatp 2022.jpg">
                                    </a>
                                    <h4 class="mt-2 text-gray-800"><b>Yadi Rusyadi, S.Si M.Si</b></h4>
                                    <h6>Kepala Sub Bagian Tata Usaha</h6>
                                    <div class="modal fade prf" id="Image3" tabindex="-1"
                                        aria-labelledby="exampleModalLable" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" style="color: red"><b>×</b></span>
                                                    </button>
                                                    <span class="bulat">
                                                        <img class="image mt-4"
                                                            src="img/struktur organisasi bpatp 2022.jpg">
                                                        <h4 class="mt-2 text-gray-800"><b>Yadi Rusyadi, S.Si M.Si</b>
                                                        </h4>
                                                        <h5 class="text-gray-700">Kepala Sub Bagian Tata Usaha</h5>
                                                        <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Hic consequatur perspiciatis, voluptatum quam nesciunt
                                                                mollitia placeat eius accusamus quidem voluptates!</i>
                                                        </p>
                                                    </span>

                                                    <div class="modal-footer justify-content-center">

                                                        <!-- Topbar Navbar WhatsApp -->
                                                        <div class="tw"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <i class="fab fa-whatsapp"
                                                                    style="color: springgreen;"></i>
                                                            </a></div>

                                                        <!-- Topbar Navbar instagram -->
                                                        <div class="ig"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <img width="17"
                                                                    src="http://localhost/BSIP/assets/img/ig.png">
                                                            </a></div>

                                                        <!-- Topbar Navbar facebook -->
                                                        <div class="fb"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <i class="fab fa-facebook-f" style="color: blue"></i>
                                                            </a></div>

                                                        <!-- Topbar Navbar twitter -->
                                                        <div class="tw"> <a href="#sosmed"
                                                                class="btn bg-gray-200 btn-circle">
                                                                <i class="fab fa-twitter" style="color: #00acee"></i>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>

                        <!-- organisasi -->
                        <h2 class="text-gray-800 mb-4 mt-5">Badan Standardisasi Instrumen Pertanian (BSIP)</h2>
                        <div class="bg-light row">
                            <div class="col-md-6">
                                <h5 class="text-primary">Organisasi</h5>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pembangunan pertanian memerlukan
                                    sebuah standar
                                    instrumen
                                    pertanian demi
                                    menjamin mutu dari proses dan produk hasil pertanian. Badan Standardisasi
                                    Instrumen Pertanian (BSIP) lahir pada 21 September 2022 melalui Peraturan
                                    Presiden Nomor 117 Tahun 2022 yang memiliki tugas menyelenggarakan koordinasi,
                                    perumusan, penerapan, dan pemeliharaan, serta harmonisasi standar instrumen
                                    pertanian.

                                <p>
                                    Dalam melaksanakan tugas tersebut, Badan Standardisasi Instrumen Pertanian
                                    menyelenggarakan fungsi:
                                </p>

                                <p>
                                    1. Penyusunan kebijakan teknis perencanaan dan program, perumusan,
                                    penerapan, dan pemeliharaan, serta harmonisasi standar instrumen pertanian;
                                    <br>
                                    2. Pelaksanaan koordinasi, perumusan, penerapan, dan pemeliharaan serta
                                    harmonisasi standar instrumen pertanian;
                                    <br>
                                    3. Pemantauan, evaluasi dan pelaporan pelaksanaan koordinasi, perumusan,
                                    penerapan, dan pemeliharaan serta harmonisasi standar instrumen pertanian;
                                    <br>
                                    4. Pelaksanaan tugas administrasi Badan Standardisasi Instrumen Pertanian;
                                    dan pelaksanaan fungsi lain yang diberikan oleh Menteri.
                                </p>
                                </p>
                            </div>

                            <div class="col-md-6 mt-4">
                                <a href="#bsip" onclick="BSIP()">
                                    <img src="img/BPATP.jpeg" class="button shadow-lg">
                                </a>
                                <div class="modal fade prf" id="BSIP" tabindex="-1" aria-labelledby="exampleModalLable"
                                    aria-hidden="true">
                                    <button class="close mr-5 mt-3" type="button" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true" style="color: white;"><b class="h1">×</b></span>
                                    </button>
                                    <div class="modal-dialog">
                                        <div class="modal-body text-center">
                                            <img src="img/BPATP.jpeg">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-5">
                            <div class="col-md-6">
                                <h3>Visi</h3>
                                <p>“Pertanian yang maju, mandiri dan modern untuk terwujudnya Indonesia maju yang
                                    berdaulat, mandiri, dan berkepribadian berlandaskan gotong royong”</p>
                            </div>
                            <div class="col-md-6">
                                <h3>Misi</h3>
                                <p>Untuk mencapai visi yang dicapai, Kementerian Pertanian menetapkan misi sebagai
                                    berikut:
                                <p>
                                    1. Mewujudkan ketahanan pangan.
                                    <br>
                                    2. Meningkatkan nilai tambah dan daya saing pertanian.
                                    <br>
                                    3. Meningkatkan kualitas SDM dan prasarana Kementerian Pertanian.
                                </p>
                                </p>
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
                        <span>Copyright &copy; BSIP 2022 - <?= date('Y') ?></span>
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
        function Image1() {
            $('#Image1').modal('show');
        }

        function Image2() {
            $('#Image2').modal('show');
        }

        function Image3() {
            $('#Image3').modal('show');
        }

        function BSIP() {
            $('#BSIP').modal('show');
        }

        function Ketua() {
            $('#Ketua').modal('show');
        }
        </script>
    </body>

</html>