<?php
helper('my');
// echo json_encode($product);
$actionUrl = isset($product['id']) ? '/produk/update/' . $product['id'] : '/produk/store';
?>
                <form action="<?= $actionUrl ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id" value="<?= isset($product['id']) ? $product['id'] : '' ?>">
                    
                    <div class="form-group">
                        <label for="akun">Pilih Akun</label>
                        <!-- <input type="text" class="form-control" id="akun" name="akun" value="<?= isset($product['akun']) ? $product['akun'] : '' ?>" required> -->
                        <select class="form-control" id="akun" name="akun" required>
                            <option value="">Pilih Akun</option>
                            <?php foreach ($akuns as $key => $value) { ?>
                                <option value="<?= $value['id'] ?>" <?= isset($product['akun']) && $product['akun'] == $value['id'] ? 'selected' : '' ?>><?= $value['username'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Judul Produk</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= isset($product['title']) ? $product['title'] : '' ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="<?= isset($product['price']) ? $product['price'] : '' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="">Pilih Category</option>
                            <?php foreach ($categories as $key => $value) { ?>
                                <option value="<?= $key ?>" <?= isset($product['category']) && $product['category'] == $key ? 'selected' : '' ?>><?= $value ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="condition">Kondisi</label>
                        <select class="form-control" id="condition" name="condition" required>
                            <option value="">Pilih Kondisi</option>
                            <option value="baru" <?= isset($product['condition']) && $product['condition'] == 'baru' ? 'selected' : '' ?>>Baru</option>
                            <option value="bekas" <?= isset($product['condition']) && $product['condition'] == 'bekas' ? 'selected' : '' ?>>Bekas</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3"> <?= isset($product['description']) ? $product['description'] : '' ?></textarea>
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