<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h2 class="mt-0">Generate Content</h2>

        <div class="card">
            <div class="card-body">

                <?= $this->include('admin/contents/_form') ?>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>