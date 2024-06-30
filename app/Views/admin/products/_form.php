<?php
helper('my');
// echo json_encode($product);
$actionUrl = isset($product['id']) ? '/produk/update/' . $product['id'] : '/produk/store';
?>
                <form action="<?= $actionUrl ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id" value="<?= isset($product['id']) ? $product['id'] : '' ?>">
                    
                    <div class="form-group">
                        <label for="nama_akun">Pilih Akun</label>
                        <input type="text" class="form-control" id="nama_akun" name="nama_akun" value="<?= isset($product['nama_akun']) ? $product['nama_akun'] : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">Judul Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= isset($product['nama_produk']) ? $product['nama_produk'] : '' ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" step="0.01" class="form-control" id="harga" name="harga" value="<?= isset($product['harga']) ? $product['harga'] : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" id="category" name="category" value="<?= isset($product['category']) ? $product['category'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="condition">Kondisi</label>
                        <input type="text" class="form-control" id="condition" name="condition" value="<?= isset($product['condition']) ? $product['condition'] : '' ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"> <?= isset($product['deskripsi']) ? $product['deskripsi'] : '' ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="label">Label</label>
                        <input type="text" class="form-control" id="label" name="label" value="<?= isset($product['label']) ? $product['label'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="target">Kota Target</label>
                        <textarea class="form-control" id="target" name="target" rows="3"> <?= isset($product['target']) ? $product['target'] : '' ?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="gambar">Foto Produk</label>
                        <div class="custom-file">
                            <input type="file" class="form-control" id="gambar" name="gambar" <?= isset($product['gambar']) ? '' : 'required' ?>>
                            <label class="custom-file-label" for="gambar">Choose file</label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary"><?= isset($product['id']) ? 'Update Product' : 'Tambah Product' ?></button>
                </form>


<?= $this->section('styles') ?>
<link href="<?= base_url('plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="<?= base_url('plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') ?>"></script>
<script>
    $(function () {
        // Basic instantiation:
        $('#cpProduct').colorpicker({
            format: 'auto'
        });
        
        const photoInp = $("#gambar");
        let imgURL;

        photoInp.change(function (e) {
            imgURL = URL.createObjectURL(e.target.files[0]);
            // $("#preview").attr("src", imgURL);
            $("#preview").html('<img src="' + imgURL + '" class="img-fluid">');
        });
    });
</script>
<?= $this->endSection() ?>