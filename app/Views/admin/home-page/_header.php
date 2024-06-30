<?php
if(!empty($header) && is_array($header)) $header = $header[0];
?>
        <form id="formHeader" action="/home-page/store" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($footer_copyright['id']) ? $footer_copyright['id'] : '' ?>">

            <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= isset($header['title']) ? $header['title'] : '' ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required><?= isset($header['description']) ? $header['description'] : '' ?></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="favicon">Favicon</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="favicon" name="favicon">
                    <label class="custom-file-label" for="favicon">Choose file</label>
                </div>
                <div id="previewFavicon">
                    <?php if(isset($header['favicon']) && $header['favicon']): ?>
                        <img src="<?= base_url('uploads/'.$header['favicon']) ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Logo</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="logo" name="logo">
                    <label class="custom-file-label" for="logo">Choose file</label>
                </div>
                <div id="previewLogo">
                    <?php if(isset($header['logo']) && $header['logo']): ?>
                        <img src="<?= base_url('uploads/'.$header['logo']) ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="color">Color</label>
                <div id="cpHeader" class="input-group colorpicker-component">
                    <input type="text" class="form-control" id="color" name="color" value="<?= isset($header['color']) ? $header['color'] : '#305AA2' ?>" required>
                    <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i style="background-color: rgb(0, 170, 187);"></i></span>
                    </span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class="d-none" for="tampil">Tampil</label>                
                <select class="form-control d-none" id="tampil" name="tampil">
                    <option value="yes" <?= isset($header['tampil']) && $header['tampil'] == 'yes' ? 'selected' : '' ?>>Yes</option>
                    <option value="no" <?= isset($header['tampil']) && $header['tampil'] == 'no' ? 'selected' : '' ?>>No</option>
                </select>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil" <?= isset($header['tampil']) && $header['tampil'] == 'yes' ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                </div>
            </div>
            <input type="hidden" name="form_type" value="header">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

<?= $this->section('javascript') ?>
<script>
    $(function () {
        // Basic instantiation:
        $('#cpHeader').colorpicker({
            format: 'auto'
        });
      
    });
</script>
<?= $this->endSection() ?>