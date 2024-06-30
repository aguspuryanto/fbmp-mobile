<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <?php if (session('msg') !== null) : ?>
            <?= session('msg'); ?>
        <?php endif; ?>

        <!-- Page Heading -->
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <h2 class="mt-0">Produk</h2>
            <div class="text-right">
                <a href="/produk/create" class="btn btn-primary mb-3">Tambah Produk</a>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">

                <?= $this->include('admin/products/_grid', ['products' => $products]) ?>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>