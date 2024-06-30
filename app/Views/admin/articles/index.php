<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <h2 class="mt-0">Artikel</h2>
            <div class="text-right">
                <a href="/artikel/create" class="btn btn-primary mb-3">Tambah Artikel</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Judul</th>
                            <!-- <th>Description</th>
                            <th>SEO Label</th> -->
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articles as $article): ?>
                        <tr>
                            <td><?= $article['id'] ?></td>
                            <td>
                                <img src="/uploads/<?= $article['gambar'] ?>" width="100">
                            </td>
                            <td><?= $article['judul'] ?></td>
                            <!-- <td><?= $article['deskripsi'] ?></td>
                            <td><?= $article['label_seo'] ?></td> -->
                            <td><?= $article['status'] ?></td>
                            <td>
                                <a href="/artikel/edit/<?= $article['id'] ?>" class="btn btn-warning">Edit</a>
                                <a href="/artikel/delete/<?= $article['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>