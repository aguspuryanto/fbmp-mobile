<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="float-left mr-3">
            <a href="/artikel/" class="btn btn-secondary mb-0"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <h2 class="mt-0">Edit Artikel</h2>

        <div class="card">
            <div class="card-body">
                <form action="/artikel/update/<?= $article['id'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="judul">Title</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $article['judul'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="<?= $article['slug'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Description</label>
                        <textarea class="form-control" rows="10" id="deskripsi" name="deskripsi" required><?= $article['deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Image</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                        <img src="/uploads/<?= $article['gambar'] ?>" width="100">
                    </div>
                    <div class="form-group">
                        <label for="label_seo">SEO Label</label>
                        <input type="text" class="form-control" id="label_seo" name="label_seo" value="<?= $article['label_seo'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="active" <?= $article['status'] == 'active' ? 'selected' : '' ?>>Active</option>
                            <option value="inactive" <?= $article['status'] == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Article</button>
                </form>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>
