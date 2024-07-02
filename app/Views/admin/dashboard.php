<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container my-5">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <img src="<?= base_url('assets/img/logo.png') ?>" width="60" height="48" alt="logo" class="d-inline-block align-text-top">
                        <h1 class="h3 mb-0 text-light d-inline-block align-text-top">Dashboard</h1>
                    </div>
                    
                    <div class="mb-3">
                        <h3 class="h3 text-light">Halo, <?= session('name') ?></h3>
                        <h3 class="h3 text-light">Bahagia melihat Anda hari ini</h3>
                    </div>
                    
                    <div class="mb-3">                    
                        <h3 class="h3 text-light">Semoga laris jualannya</h3>
                        <h3 class="h3 text-light">Berkah Rezekinya, Aamiin</h3>
                    </div>

                    <!-- Content Row -->
                    <div class="row mb-3">
                        <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-primary text-uppercase mb-1">Akun FB Aktif</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $stat['akun'] ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-success text-uppercase mb-1">Iklan Terposting</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $stat['iklan'] ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <a href="<?= base_url('akun') ?>" class="btn btn-warning btn-lg btn-block">Tambah Akun</a>
                    <a href="<?= base_url('produk') ?>" class="btn btn-warning btn-lg btn-block">Upload Produk</a>
                    <!-- <a href="<?= base_url('optimasi') ?>" class="btn btn-warning btn-lg btn-block">Optimasi</a> -->

                </div>
                <!-- /.container-fluid -->

<?= $this->endSection() ?>