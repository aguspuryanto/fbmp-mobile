<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container my-5">

        <?php if (session('msg') !== null) : ?>
            <?= session('msg'); ?>
        <?php endif; ?>

        <!-- Page Heading -->
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <h2 class="mt-0"><?= $title ?></h2>
            <div class="text-right">
                <a href="<?= base_url('akun/create') ?>" class="btn btn-primary mb-3">Tambah Akun</a>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card-body m-0">

                <?= $this->include('admin/akun/_grid', ['akuns' => $akuns]) ?>

            </div>
        </div>

        <a href="<?= base_url('dashboard') ?>" class="btn btn-warning btn-lg btn-block">Menu Utama</a>

    </div>

<?= $this->endSection() ?>