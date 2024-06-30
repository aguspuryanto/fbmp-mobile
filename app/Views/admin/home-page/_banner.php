<?php
if(!empty($banner) && is_array($banner)) $banner = $banner[0];
?>

<form action="/home-page/store" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($banner['id']) ? $banner['id'] : '' ?>">

            <div class="form-group col-md-6">
                <label for="banner1">Banner Promo 1</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="banner1" name="banner1" value="<?= isset($banner['banner1']) ? $banner['banner1'] : '' ?>" required>
                    <label class="custom-file-label" for="banner1">Choose file</label>
                </div>
                <div id="preview1" class="img-preview">
                    <?php if(isset($banner['banner1']) && $banner['banner1']): ?>
                        <img src="/uploads/<?= $banner['banner1'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="banner2">Banner Promo 2</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="banner2" name="banner2" value="<?= isset($banner['banner2']) ? $banner['banner2'] : '' ?>" required>
                    <label class="custom-file-label" for="banner2">Choose file</label>
                </div>
                <div id="preview2" class="img-preview">
                    <?php if(isset($banner['banner2']) && $banner['banner2']): ?>
                        <img src="/uploads/<?= $banner['banner2'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="banner3">Banner Promo 3</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="banner3" name="banner3" value="<?= isset($banner['banner3']) ? $banner['banner3'] : '' ?>" required>
                    <label class="custom-file-label" for="banner3">Choose file</label>
                </div>
                <div id="preview3" class="img-preview">
                    <?php if(isset($banner['banner3']) && $banner['banner3']): ?>
                        <img src="/uploads/<?= $banner['banner3'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="color">Color</label>
                <div id="cpBanner" class="input-group colorpicker-component">
                    <input type="text" class="form-control" id="color" name="color" value="<?= isset($banner['color']) ? $banner['color'] : '#305AA2' ?>" required>
                    <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i style="background-color: rgb(0, 170, 187);"></i></span>
                    </span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class="d-none" for="tampil">Tampil</label>                
                <select class="form-control d-none" id="tampil" name="tampil">
                    <option value="yes" <?= isset($banner['tampil']) && $banner['tampil'] == 'yes' ? 'selected' : '' ?>>Yes</option>
                    <option value="no" <?= isset($banner['tampil']) && $banner['tampil'] == 'no' ? 'selected' : '' ?>>No</option>
                </select>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil" <?= isset($banner['tampil']) && $banner['tampil'] == 'yes' ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                </div>
            </div>
            <input type="hidden" name="form_type" value="banner">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

<?= $this->section('javascript') ?>
<script>
    $(function () {
        // Basic instantiation:
        $('#cpBanner').colorpicker({
            format: 'auto'
        });
      
    });
</script>
<?= $this->endSection() ?>