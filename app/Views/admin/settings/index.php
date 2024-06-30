<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <?php if (session('msg') !== null) : ?>
            <?= session('msg'); ?>
        <?php endif; ?>

        <!-- Page Heading -->
        <h1 class="mt-0">Pengaturan</h1>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="akun-tab" data-toggle="pill" href="#akun" role="tab" aria-controls="akun" aria-selected="true">Akun</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="seo-tab" data-toggle="pill" href="#seo" role="tab" aria-controls="seo" aria-selected="false">SEO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="meta-tab" data-toggle="pill" href="#meta" role="tab" aria-controls="meta" aria-selected="false">Meta</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="akun" role="tabpanel" aria-labelledby="akun-tab">
                <?= $this->include('admin/settings/_akun', ['akun' => $akun]) ?>
            </div>
            <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                <?= $this->include('admin/settings/_seo', ['seo' => $seo]) ?>
            </div>
            <div class="tab-pane fade" id="meta" role="tabpanel" aria-labelledby="meta-tab">
                <?= $this->include('admin/settings/_meta', ['meta' => $meta]) ?>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?= $this->endSection() ?>