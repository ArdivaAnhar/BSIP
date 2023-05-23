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

        .fas:hover {
            filter: brightness(0.5);
        }

        .navbar-nav .nav-item .text-gray-700:hover {
            filter: brightness(0.5);
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

                    <!-- tanggal -->
                    <h5 class="text-white mx-3 pt-3 text-center">
                        <b>
                            <?= date('d, M Y')?>
                        </b>
                    </h5>

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

                    <div class="card-body ml-3 mr-4 pb-5">
                        <h2 class="text-gray-800"><b>Badan Standardisasi Instrument Pertanian (BSIP)</b></h2>
                        <p>
                            <i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae aliquid voluptatem
                                dolore
                                expedita delectus labore nemo rem laudantium possimus quibusdam deleniti ab
                                assumenda
                                adipisci fugit illum quis inventore ex aspernatur nam culpa similique, blanditiis
                                neque
                                velit? Minus, voluptates. At error corrupti quos iusto dolor voluptate totam numquam
                                explicabo. Assumenda obcaecati eligendi repellendus nihil perspiciatis
                                necessitatibus
                                sint
                                debitis, quas excepturi ducimus esse consequatur laudantium architecto deserunt
                                inventore
                                dolor a corporis eaque? Voluptate autem neque adipisci velit nulla porro possimus,
                                magnam
                                quod deserunt dolorum facilis sunt unde veritatis eos nobis eius soluta doloremque
                                ipsam
                                dolor maxime tenetur quas dolores. Magni autem ad similique modi quibusdam, est
                                dignissimos
                                dolore repellat quasi officia quae nemo natus fugiat tempora cum vel veniam beatae
                                nisi.
                            </i>
                        </p>
                    </div>

                    <div class="pt-5">
                        <!-- Layanan -->
                        <h2 class="text-center mt-5 text-gray-700"><b>Layanan</b></h2>

                        <!-- lisensi -->
                        <div class="row justify-content-center">
                            <div class=" col-xl-3 col-md-6 m-4">
                                <div class="card border-bottom-primary shadow-lg h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters justify-content-center mb-2">
                                            <a href="#dsc" data-toggle="popover" title="Lisensi"
                                                data-content="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut, excepturi maiores modi natus officiis obcaecati.">
                                                <i class="fas fa-briefcase fa-3x text-gray-300"></i>
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
                                                data-content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut, excepturi maiores modi natus officiis obcaecati.">
                                                <i class="fas fa-envelope fa-3x text-gray-300"></i>
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
                                                data-content="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat dicta voluptatem ut ipsam quaerat?">
                                                <i class="fas fa-mail-bulk fa-3x text-gray-300"></i>
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
                                                data-content="Lorem, ipsum dolor sit amet consectetur adipisicing elit.">
                                                <i class="fas fa-hand-holding fa-3x text-gray-300"></i>
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
                                                data-content="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi adipisci et, eius ad tenetur magni id deleniti?">
                                                <i class="fas fa-barcode fa-3x text-gray-300"></i>
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
                                                data-content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea rem consequatur consequuntur alias atque. Quas dolores molestiae asperiores, quos quod possimus reprehenderit.">
                                                <i class="fas fa-book-reader fa-3x text-gray-300"></i>
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
                                                data-content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ut animi doloribus soluta nesciunt minima eaque enim voluptates aperiam!">
                                                <i class="fas fa-tty fa-3x text-gray-300"></i>
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
                                                data-content="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, libero consectetur.">
                                                <i class="fas fa-info-circle fa-3x text-gray-300"></i>
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
                                                data-content="Lorem ipsum dolor sit amet consectetur.">
                                                <i class="fas fa-book-open fa-3x text-gray-300"></i>
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

    </body>

</html>