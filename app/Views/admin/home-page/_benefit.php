<?php
if(!empty($benefit) && is_array($benefit)) $benefit = $benefit[0];
?>

<form action="/home-page/store" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($benefit['id']) ? $benefit['id'] : '' ?>">

            <div class="form-group col-md-6">
                <label for="logo">Benefit 1</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="banner1" name="banner1" required>
                    <label class="custom-file-label" for="banner1">Choose file</label>
                </div>
                <div id="previewBanner1">
                    <?php if(isset($benefit['banner1']) && $benefit['banner1']): ?>
                        <img src="/uploads/<?= $benefit['banner1'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Judul</label>
                <input type="text" class="form-control" id="judul1" name="judul1" value="<?= isset($benefit['judul1']) ? $benefit['judul1'] : '' ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Keterangan</label>
                <textarea rows="5" type="text" class="form-control" id="keterangan1" name="keterangan1"><?= isset($benefit['keterangan1']) ? $benefit['keterangan1'] : '' ?></textarea>
            </div>

            <div class="form-group col-md-6">
                <label for="logo">Benefit 2</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="banner2" name="banner2" required>
                    <label class="custom-file-label" for="banner2">Choose file</label>
                </div>
                <div id="previewBanner2">
                    <?php if(isset($benefit['banner2']) && $benefit['banner2']): ?>
                        <img src="/uploads/<?= $benefit['banner2'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Judul</label>
                <input type="text" class="form-control" id="judul2" name="judul2" value="<?= isset($benefit['judul2']) ? $benefit['judul2'] : '' ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Keterangan</label>
                <textarea rows="5" type="text" class="form-control" id="keterangan2" name="keterangan2"><?= isset($benefit['keterangan2']) ? $benefit['keterangan2'] : '' ?></textarea>
            </div>

            <div class="form-group col-md-6">
                <label for="logo">Benefit 3</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="banner3" name="banner3" required>
                    <label class="custom-file-label" for="banner3">Choose file</label>
                </div>
                <div id="previewBanner3">
                    <?php if(isset($benefit['banner3']) && $benefit['banner3']): ?>
                        <img src="/uploads/<?= $benefit['banner3'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Judul</label>
                <input type="text" class="form-control" id="judul3" name="judul3" value="<?= isset($benefit['judul3']) ? $benefit['judul3'] : '' ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Keterangan</label>
                <textarea rows="5" type="text" class="form-control" id="keterangan3" name="keterangan3"><?= isset($benefit['keterangan3']) ? $benefit['keterangan3'] : '' ?></textarea>
            </div>
            
            <div class="form-group col-md-6">
                <label for="color">Color</label>
                <div id="cpBenefit" class="input-group colorpicker-component">
                    <input type="text" class="form-control" id="color" name="color" value="<?= isset($benefit['color']) ? $benefit['color'] : '#305AA2' ?>" required>
                    <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i style="background-color: rgb(0, 170, 187);"></i></span>
                    </span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class="d-none" for="tampil">Tampil</label>                
                <select class="form-control d-none" id="tampil" name="tampil">
                    <option value="yes" <?= isset($benefit['tampil']) && $benefit['tampil'] == 'yes' ? 'selected' : '' ?>>Yes</option>
                    <option value="no" <?= isset($benefit['tampil']) && $benefit['tampil'] == 'no' ? 'selected' : '' ?>>No</option>
                </select>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil" <?= isset($benefit['tampil']) && $benefit['tampil'] == 'yes' ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                </div>
            </div>
            <input type="hidden" name="form_type" value="benefit">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        
<?= $this->section('javascript') ?>
<script>
    $(function () {
        // Basic instantiation:
        $('#cpBenefit').colorpicker({
            format: 'auto'
        });
      
    });
</script>
<?= $this->endSection() ?>