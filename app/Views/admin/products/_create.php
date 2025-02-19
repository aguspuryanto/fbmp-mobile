<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <div class="container my-5">

        <!-- Page Heading -->
        <h2 class="mt-0">Tambah Product</h2>

        <div class="card mb-5">
            <!-- <div class="card-header">Featured</div> -->
            <div class="card-body m-0">

                <?= $this->include('admin/products/_form') ?>
            </div>
        </div>

        <a href="<?= base_url('dashboard') ?>" class="btn btn-warning btn-lg btn-block">Menu Utama</a>

    </div>

<?= $this->endSection() ?>