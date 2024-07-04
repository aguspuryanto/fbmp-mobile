<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <?php if(session()->getFlashdata('msg')):?>
                                        <?= session()->getFlashdata('msg') ?>
                                    <?php endif;?>
                                    <form action="/register/save" method="post">
                                        <div class="mb-3">
                                            <label for="InputForName" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="username" class="form-control" id="InputForName" value="<?= set_value('username') ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="InputForNowa" class="form-label">No Wa</label>
                                            <input type="text" name="nowa" class="form-control" id="InputForNowa" value="<?= set_value('nowa') ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="InputForEmail" class="form-label">Email address</label>
                                            <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="InputForPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="InputForPassword">
                                        </div>
                                        <div class="mb-3">
                                            <label for="InputForCity" class="form-label">Kota Domisili</label>
                                            <input type="text" name="kota" class="form-control" id="InputForCity">
                                        </div>
                                        <div class="mb-3">
                                            <label for="InputForPaket" class="form-label">Paket</label>
                                            <select name="paket" id="InputForPaket" class="form-select form-control">
                                                <option value="paket1">Paket 1 Bulan</option>
                                                <option value="paket2">Paket 3 Bulan</option>
                                                <option value="paket3">Paket 6 Bulan</option>
                                                <option value="paket4">Paket 12 Bulan</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </form>
                                    <!-- <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>