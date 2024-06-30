<?php
if(!empty($testimony) && is_array($testimony)) $testimony = $testimony[0];
?>
<form action="/home-page/store" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($testimony['id']) ? $testimony['id'] : '' ?>">
            
            <div class="form-group col-md-6">
                <label for="logo">Testimony 1</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="banner1" name="banner1">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div id="previewBanner1">
                    <?php if(isset($testimony['banner1']) && $testimony['banner1']): ?>
                        <img src="/uploads/<?= $testimony['banner1'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Judul</label>
                <input type="text" class="form-control" id="judul1" name="judul1" value="<?= isset($testimony['judul1']) ? $testimony['judul1'] : '' ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Keterangan</label>
                <textarea rows="5" type="text" class="form-control" id="keterangan1" name="keterangan1"><?= isset($testimony['keterangan1']) ? $testimony['keterangan1'] : '' ?></textarea>
            </div>

            <div class="form-group col-md-6">
                <label for="logo">Testimony 2</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="banner2" name="banner2">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div id="previewBanner2">
                    <?php if(isset($testimony['banner2']) && $testimony['banner2']): ?>
                        <img src="/uploads/<?= $testimony['banner2'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Judul</label>
                <input type="text" class="form-control" id="judul2" name="judul2" value="<?= isset($testimony['judul2']) ? $testimony['judul2'] : '' ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Keterangan</label>
                <textarea rows="5" type="text" class="form-control" id="keterangan2" name="keterangan2"><?= isset($testimony['keterangan2']) ? $testimony['keterangan2'] : '' ?></textarea>
            </div>

            <div class="form-group col-md-6">
                <label for="logo">Testimony 3</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="banner3" name="banner3">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div id="previewBanner3">
                    <?php if(isset($testimony['banner3']) && $testimony['banner3']): ?>
                        <img src="/uploads/<?= $testimony['banner3'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Judul</label>
                <input type="text" class="form-control" id="judul3" name="judul3" value="<?= isset($testimony['judul3']) ? $testimony['judul3'] : '' ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Keterangan</label>
                <textarea rows="5" type="text" class="form-control" id="keterangan3" name="keterangan3"> <?= isset($testimony['keterangan3']) ? $testimony['keterangan3'] : '' ?></textarea>
            </div>
            
            <div class="form-group col-md-6">
                <label for="color">Color</label>
                <div id="cpTestimony" class="input-group colorpicker-component">
                    <input type="text" class="form-control" id="color" name="color" value="<?= isset($testimony['color']) ? $testimony['color'] : '#305AA2' ?>" required>
                    <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i style="background-color: rgb(0, 170, 187);"></i></span>
                    </span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class="d-none" for="tampil">Tampil</label>                
                <select class="form-control d-none" id="tampil" name="tampil">
                    <option value="yes" <?= isset($testimony['tampil']) && $testimony['tampil'] == 'yes' ? 'selected' : '' ?>>Yes</option>
                    <option value="no" <?= isset($testimony['tampil']) && $testimony['tampil'] == 'no' ? 'selected' : '' ?>>No</option>
                </select>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil" <?= isset($testimony['tampil']) && $testimony['tampil'] == 'yes' ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                </div>
            </div>
            <input type="hidden" name="form_type" value="testimony">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        
<?= $this->section('javascript') ?>
<script>
    $(function () {
        // Basic instantiation:
        $('#cpTestimony').colorpicker({
            format: 'auto'
        });
      
    });
</script>
<?= $this->endSection() ?>