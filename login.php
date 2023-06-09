<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BSIP | Login to Admin</title>

        <!--  title icon -->
        <link rel="icon" href="assets/img/icon.png" type="image/x-icon">

        <!-- Custom fonts for this template-->
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- template bootstrap -->
        <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

        <style type="text/css">
        .row .col-lg-7,
        .card-header {
            cursor: default;
        }

        /* pintu */
        .door-icon {
            position: relative;
            display: inline-block;
            width: 28px;
            height: 24px;
            overflow: hidden;
        }

        .door-icon i {
            position: absolute;
            top: 0;
            left: 0;
            transition: transform 0.5s;
        }

        .door-icon:hover i:first-child {
            transform: translateY(-100%);
        }

        .door-icon:hover i:last-child {
            transform: translateY(0);
        }

        .door-icon:hover {
            filter: brightness(1.3);
            transition: 0.6;
        }
        </style>
    </head>

    <body class="bg-white">

        <div class="container pt-5">

            <!-- Outer Row -->
            <div class="row justify-content-center mt-5">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-7 d-lg-block bg-white pl-5 mt-3 text-center">
                                    <img src="assets/img/logo.png" width="165">
                                    <h3>
                                        Masuk Untuk Menjadi <b>Administrator</b>
                                        <br>
                                        <b class="text-success">Badan
                                            <span style="color: #ffd700;">Standardisasi</span>
                                            <br>
                                            <span style="color: #ffd700;">Instrument</span> Pertanian</b>
                                        <br>
                                        <h5>
                                            <b class="text-gray-800"><strong>Bogor, Jawa Barat</strong></b>
                                        </h5>
                                    </h3>
                                </div>

                                <!-- form -->
                                <div class="col-lg-4 bg-gray-100 shadow-lg">
                                    <!-- pintu -->
                                    <a class="door-icon mt-4 mr-3 float-right" title="Kembali ke halaman User"
                                        style="color: #666666;" href="index.php">
                                        <i class="fas fa-door-closed fa-lg mt-1"></i>
                                        <i class="fas fa-door-open fa-lg mt-1"></i>
                                    </a>
                                    <h2 class="text-gray-700 ml-4 mt-3"><b>Login</b></h2>
                                    <h6 class="ml-4"><i>Masuk untuk melanjutkan!</i></h6>

                                    <?php
                                    // Periksa apakah ada pesan alert
                                    if (isset($_GET['alert'])) {
                                        $alert = $_GET['alert'];
                                        if ($alert == "gagal") {
                                        echo '<div class="alert alert-danger shadow" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><b>&times;</b></span>
                                    </button> Username atau password salah</div>';
                                        } elseif ($alert == "sukses") {
                                        echo '<div class="alert alert-success shadow" role="alert">Berhasil login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><b>&times;</b></span>
                                    </button></div>';
                                    }
                                }
                            ?>
                                    <form action="proses-login.php" method="POST">
                                        <div class="form-group shadow-lg mr-3 ml-3">
                                            <input type="text" name="username"
                                                class="pt-4 pb-4 form-control form-control-user" placeholder="Username"
                                                required>
                                        </div>
                                        <?php include 'password-toggle.php'; ?>
                                        <?php renderPasswordToggle(); ?>
                                        <button type="submit" class="btn-primary btn-lg ml-4">
                                            Login
                                        </button>
                                        <div class="form-check mr-3 mt-3 pr-3 float-right">
                                            <input type="checkbox" class="form-check-input" title="Ingat saya"
                                                id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                Ingat Saya
                                            </label>
                                        </div>
                                        <div class="text-center mb-3 my-2">
                                            <b class="small text-gray-800"><strong>Lupa Katasandi?</strong></b>
                                            <a href="callto:081284043251" class="small" style="text-decoration: none;"
                                                title="Hubungi Admin"><b>Hubungi Admin!</b></a>
                                        </div>
                                    </form>
                                </div>
                                <!-- end form -->

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="assets/js/sb-admin-2.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#togglePassword').click(function() {
                $(this).toggleClass('active');
                var password = $('#password');
                password.attr('type', password.attr('type') === 'password' ? 'text' : 'password');
            });
        });
        </script>
    </body>

</html>