<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <?php if (session('msg') !== null) : ?>
            <?= session('msg'); ?>
        <?php endif; ?>

        <!-- Page Heading -->
        <h2 class="mt-0"><?= $title ?></h2>

        <div class="card">
            <div class="card-body">

                <?= $this->include('admin/akun/_form', ['akun' => $akun]) ?>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>