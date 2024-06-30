<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h2 class="mt-0">Tambah Product</h2>

        <div class="card">
            <!-- <div class="card-header">Featured</div> -->
            <div class="card-body">

                <?= $this->include('admin/products/_form', ['product' => $product, 'urlform' => '/produk/store']) ?>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>