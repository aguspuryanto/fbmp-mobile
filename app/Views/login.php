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
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php if(session()->getFlashdata('msg')):?>
                                        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                    <?php endif;?>
                                    <form action="/login/auth" method="post">
                                        <div class="mb-3">
                                            <label for="InputForEmail" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="InputForPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="InputForPassword">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
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