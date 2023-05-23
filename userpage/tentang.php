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

        .row .col-md-7 h4,
        .section-heading,
        .col-md-3 h4 {
            font-family: 'Times New Roman', Times, serif;
        }

        .prf {
            padding-top: 55px;
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

                    <!-- tanggal -->
                    <h5 class="text-white mx-3 pt-3 text-center">
                        <b>
                            <span><?= date('d, M Y') ?></span>
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
                        <h2 class="text-gray-700 mt-5">Ir. Ketut Widarsono</h2>
                        <div class="row">

                            <div class="col-md-5">
                                <a href="#ketua" onclick="Ketua()">
                                    <img src="img/ketua.jpeg" height="650" class="shadow-lg">
                                </a>
                                <div class="modal fade" id="Ketua" tabindex="-1" aria-labelledby="exampleModalLable"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-body text-center">
                                            <img src="img/ketua.jpeg" width="400">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 text-gray-800 mb-5">
                                <b>
                                    <h4>
                                        Biografi: Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aut
                                        dignissimos odio sit tempore id repellat provident, nihil qui tenetur. Delectus
                                        facere adipisci ipsum natus explicabo, molestias quasi commodi voluptatum, velit
                                        vel quas, maxime dignissimos libero repudiandae modi nemo alias. Vel sint omnis
                                        fuga est ipsam. Placeat libero, laudantium eum quis commodi atque officiis eaque
                                        beatae. Est aliquam magni mollitia placeat ab exercitationem officiis impedit
                                        doloribus ullam in repudiandae, unde quibusdam fugiat alias aperiam a!
                                        Praesentium, optio dolores. Amet pariatur ducimus eaque. Veniam, fuga at atque
                                        quas culpa voluptatum debitis libero nobis consequuntur officiis, eveniet
                                        corrupti possimus corporis dolor maiores aperiam eos ab velit quia tenetur. Qui,
                                        quos quisquam, vero accusantium ratione nobis iure exercitationem magni velit
                                        optio ipsum corrupti incidunt. Ducimus dolorum totam cumque praesentium, commodi
                                        quod voluptatem ad! Qui accusantium consequatur maiores at. Aliquam enim quam
                                        sit sint?
                                    </h4>
                                </b>
                            </div>
                        </div>

                        <!-- petinggi -->
                        <h2 class="section-heading text-uppercase text-center mt-5 mb-4 text-gray-800"><b>
                                Top 3 Petinggi Kami</b></h2>
                        <div class="row justify-content-center text-center">

                            <!-- Profil 1 -->
                            <div class="col-md-3 mr-5 mb-5 mt-5">
                                <span class="bulat">
                                    <a href="#profil" onclick="Image1()">
                                        <img class="image hover shadow-lg"
                                            src="https://images.bisnis.com/posts/2022/12/21/1610680/elon-musk.jpg"></a>
                                    <h4 class="mt-2 text-gray-800"><b>Mas Elon</b></h4>
                                    <h6>Slave</h6>

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
                                                        <img class="image mt-4"
                                                            src="https://images.bisnis.com/posts/2022/12/21/1610680/elon-musk.jpg">
                                                        <h4 class="mt-2 text-gray-800"><b>Mas Elon</b></h4>
                                                        <h5 class="text-gray-900">Slave</h5>
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
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJc0UIxhr2CaBKglWfMEof1ruvTHYqS7PKvw&usqp=CAU">
                                    </a>
                                    <h4 class="mt-2 text-gray-800"><b>John Cena</b></h4>
                                    <h6>Leader</h6>
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
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJc0UIxhr2CaBKglWfMEof1ruvTHYqS7PKvw&usqp=CAU">
                                                        <h4 class="mt-2 text-gray-800"><b>John Cena</b></h4>
                                                        <h5 class="text-gray-900">Leader</h5>
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
                                        <img class="image hover shadow-lg"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCVilS_aA9IUwW74hL8gANyYAqYy0psVOjyw&usqp=CAU">
                                    </a>
                                    <h4 class="mt-2 text-gray-800"><b>The Goat</b></h4>
                                    <h6>Slave</h6>
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
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCVilS_aA9IUwW74hL8gANyYAqYy0psVOjyw&usqp=CAU">
                                                        <h4 class="mt-2 text-gray-800"><b>The Goat</b></h4>
                                                        <h5 class="text-gray-900">Slave</h5>
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
                                <h5 class="text-primary"><b>Sejarah</b> (Singkat)</h5>
                                <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ratione
                                        nesciunt aliquam et, nam eum. Amet blanditiis molestiae iste accusamus? Vero
                                        nemo
                                        ipsa atque, unde aperiam placeat nisi quod dolor maxime ab voluptate?
                                        Dignissimos
                                        laudantium tenetur vitae excepturi ea nihil impedit, iste, quos tempora expedita
                                        voluptatum cum delectus natus. Debitis incidunt nam facere possimus mollitia
                                        officia
                                        vitae. Laboriosam, sunt quae. Veritatis sapiente natus harum autem dolorem sint,
                                        earum eum corrupti officiis eaque laboriosam incidunt quaerat unde, temporibus
                                        voluptates recusandae? Obcaecati at quasi repudiandae quod exercitationem
                                        voluptate
                                        enim, iusto laudantium alias. Aperiam perferendis voluptatibus, saepe
                                        dignissimos
                                        aliquid laborum, quod sed, ducimus tempore autem tempora dolores assumenda
                                        reiciendis cupiditate asperiores quo veniam fuga est nostrum alias rem optio
                                        officia. Voluptates ipsum nihil dolor veritatis nesciunt nobis, magni
                                        repudiandae
                                        eaque labore maiores aliquam veniam excepturi aperiam blanditiis ullam neque
                                        dignissimos? Officia, provident corrupti consequuntur repellat quaerat
                                        recusandae
                                        eius in dolorem deserunt, aperiam voluptatum?</i></p>
                            </div>

                            <div class="col-md-6">
                                <a href="#bsip" onclick="BSIP()">
                                    <img src="img/BPATP.jpeg" class="shadow-lg">
                                </a>
                                <div class="modal fade prf" id="BSIP" tabindex="-1" aria-labelledby="exampleModalLable"
                                    aria-hidden="true">
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam assumenda dicta
                                    vitae doloremque asperiores officia dolores veritatis minima expedita, ipsum
                                    quisquam alias necessitatibus repellat voluptatem, porro perferendis odio et
                                    deserunt ducimus pariatur. Odio, incidunt explicabo. Sunt in adipisci velit mollitia
                                    sequi asperiores quod, minus molestias earum. Eos error laboriosam dolorum? Ex
                                    deserunt odit voluptate facere, quas architecto ad assumenda cumque impedit dolore
                                    ipsum! Labore placeat nulla consectetur expedita dolor, iure suscipit corrupti.
                                    Debitis eos consectetur voluptate ducimus rerum, sit totam nihil voluptates
                                    deleniti, ipsam ratione modi sed asperiores corporis sint iure perspiciatis magni
                                    dignissimos temporibus odio quis facilis in fuga. Aliquam, enim fuga ab tempore
                                    atque quae. Natus quas illum perspiciatis. Tempore, excepturi nulla reprehenderit
                                    omnis magni earum molestias officia voluptas delectus ab provident? Placeat
                                    inventore dolor debitis, rem illo, iusto facere, accusantium blanditiis nesciunt
                                    quidem reprehenderit error. Earum tempore et dolorem accusantium tenetur sint
                                    provident similique doloribus accusamus veritatis.</p>
                            </div>
                            <div class="col-md-6">
                                <h3>Misi</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum molestiae deserunt
                                    blanditiis mollitia explicabo reiciendis ab quia, vero corrupti suscipit in
                                    consequuntur illo eveniet itaque perspiciatis animi nam! Suscipit quas possimus in
                                    ipsam ipsa repellendus, amet officia dolores? Ea odio fuga nostrum vel error cum
                                    quos fugiat culpa sunt a, aspernatur aliquid, possimus accusantium aperiam vitae
                                    suscipit quas fugit voluptatum quibusdam, dolorum unde! Totam iusto nemo, libero,
                                    sint debitis iste ad minus dolorum ratione numquam quae modi corporis iure sed
                                    magnam qui quis id saepe ab hic accusamus vitae illo. Similique, aut esse aliquam
                                    consectetur incidunt atque possimus rem, necessitatibus accusantium perspiciatis
                                    alias magni, fugiat facere! Architecto, ut? Voluptas accusantium voluptatem saepe
                                    molestiae cupiditate cum soluta dolore, asperiores, tempora at dolorum sunt neque
                                    consequatur optio nam ab. Excepturi vitae vel dolore, sapiente sed nisi consequatur
                                    eveniet. Officiis mollitia omnis minima reiciendis, a quaerat dicta provident,
                                    asperiores molestiae obcaecati, aut aliquid.</p>
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
        function Bantuan() {
            $('#Bantuan').modal('show');
        }

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