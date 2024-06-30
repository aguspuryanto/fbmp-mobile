<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <?php if (session('msg') !== null) : ?>
            <?= session('msg'); ?>
        <?php endif; ?>

        <!-- Page Heading -->
        <h2 class="mt-0">Home Page</h2>
        <!-- <div class="text-right">
            <a href="/konten/create" class="btn btn-primary mb-3">Add Content</a>
        </div> -->

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <?php foreach ($navlink as $item):
                $isActive = $item == 'Header' ? 'active' : '';
                $isTrue = $item == 'Header' ? 'true' : 'false';
                echo '<li class="nav-item">
                <a class="nav-link ' . $isActive . '" id="pills-'.strtolower($item).'-tab" data-toggle="pill" href="#pills-'.strtolower($item).'" role="tab" aria-controls="pills-'.strtolower($item).'" aria-selected="' . $isTrue . '">'.$item.'</a>
            </li>'. PHP_EOL;
            endforeach ?>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-header" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_header', ['header' => $header]) ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-slider" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_slider', ['slider' => $slider]) ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-banner" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_banner', ['banner' => $banner]) ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-benefit" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_benefit', ['benefit' => $benefit]) ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-product" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_product', ['product' => $product]) ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-article" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_article', ['article' => $article]) ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-testimony" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_testimony', ['testimony' => $testimony]) ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-footer" role="tabpanel" aria-labelledby="pills-contact-tab">
                <?= $this->include('admin/home-page/_footer', [
                    'footer_profil' => $footer_profil,
                    'footer_sosmed' => $footer_sosmed,
                    'footer_copyright' => $footer_copyright,
                ]) ?>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link href="<?= base_url('plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="<?= base_url('plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') ?>"></script>
<?= $this->endSection() ?>