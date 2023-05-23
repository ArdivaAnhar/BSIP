<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BSIP | Login</title>

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
        .row .col-lg-6 {
            cursor: default;
        }
        </style>
    </head>

    <body class="bg-success">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center pt-4">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-lg-block bg-gradient-success shadow-lg p-5 text-center">
                                    <img src="assets/img/logo.png" width="200">
                                    <h3 class="text-white">
                                        Halaman Login Administrasi
                                        <br>
                                        <b>Badan Standardisasi Instrument Pertanian</b>
                                        <br>
                                        <h5 class="text-light">
                                            <b><strong>Bogor, Jawa Barat</strong></b>
                                        </h5>
                                    </h3>
                                </div>

                                <!-- form -->
                                <div class="col-lg-6 bg-light">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                        </div>
                                        <form class="user" action="cek-login.php" method="POST">
                                            <div class="form-group">
                                                <input type="text" name="username"
                                                    class="form-control form-control-user"
                                                    placeholder="Masukkan Nama Anda..." required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password"
                                                    class="form-control form-control-user" id="exampleInputPassword"
                                                    placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                            <hr>
                                            <button class="btn btn-primary btn-user btn-block"><b><i
                                                        class="fa fa-sign-in-alt"></i> Login</b>
                                            </button>
                                            <br>
                                            <a href="index.php" class="btn btn-danger btn-user btn-block">
                                                <i class="fa fa-sign-out-alt"></i>
                                                <b>Back</b>
                                            </a>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="#">By. Creator | 2022 - <?=date('Y')?></a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="#">Who Is The Creator?</a>
                                        </div>
                                    </div>
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

    </body>

</html>