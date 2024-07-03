<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container my-5">

        <?php if (session('msg') !== null) : ?>
            <?= session('msg'); ?>
        <?php endif; ?>

        <!-- Page Heading -->
        <h2 class="mt-0 text-center"><?= $title ?></h2>

        <div class="card mb-5">
            <div class="card-body">

                <?= $this->include('admin/akun/_form') ?>
            </div>
        </div>
        
        <a href="<?= base_url('dashboard') ?>" class="btn btn-warning btn-lg btn-block">Menu Utama</a>
    </div>

<?= $this->endSection() ?>