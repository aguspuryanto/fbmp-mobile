<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="float-left mr-3">
            <a href="/produk/" class="btn btn-secondary mb-0"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <h2 class="mt-0">Edit Product</h2>

        <div class="card">
            <!-- <div class="card-header">Featured</div> -->
            <div class="card-body">
                <?php
                $data = [
                    'product' => $product,
                    'action' => '/produk/update/' . $product['id']
                ];
                // echo json_encode($data);
                echo $this->include('admin/products/_form', $data);
                ?>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>
