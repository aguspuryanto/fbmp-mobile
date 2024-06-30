<?php
if(!empty($footer_profil) && is_array($footer_profil)) $footer_profil = $footer_profil[0];
?>
<form action="/home-page/store" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($footer_profil['id']) ? $footer_profil['id'] : '' ?>">
            
            <div class="form-group col-md-6">
                <label for="color">Nama Usaha</label>
                <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" value="<?= isset($footer_profil['nama_usaha']) ? $footer_profil['nama_usaha'] : '' ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="color">No Whatsapp</label>
                <input type="text" class="form-control" id="wa_usaha" name="wa_usaha" value="<?= isset($footer_profil['wa_usaha']) ? $footer_profil['wa_usaha'] : '' ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="color">Alamat Usaha</label>
                <textarea rows="4" class="form-control" id="alamat_usaha" name="alamat_usaha" required><?= isset($footer_profil['alamat_usaha']) ? $footer_profil['alamat_usaha'] : '' ?></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="color">Color</label>
                <div id="cpProfil" class="input-group colorpicker-component">
                    <input type="text" class="form-control" id="color" name="color" value="<?= isset($footer_profil['color']) ? $footer_profil['color'] : '#305AA2' ?>" required>
                    <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i style="background-color: rgb(0, 170, 187);"></i></span>
                    </span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class="d-none" for="tampil">Tampil</label>                
                <select class="form-control d-none" id="tampil" name="tampil">
                    <option value="yes" <?= isset($footer_profil['tampil']) && $footer_profil['tampil'] == 'yes' ? 'selected' : '' ?>>Yes</option>
                    <option value="no" <?= isset($footer_profil['tampil']) && $footer_profil['tampil'] == 'no' ? 'selected' : '' ?>>No</option>
                </select>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name="tampil" <?= isset($footer_profil['tampil']) && $footer_profil['tampil'] == 'yes' ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="customSwitch1">Tampilkan</label>
                </div>
            </div>
            <input type="hidden" name="form_type" value="profil">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <?= $this->section('javascript') ?>
<script>
    $(function () {
        // Basic instantiation:
        $('#cpProfil').colorpicker({
            format: 'auto'
        });
      
    });
</script>
<?= $this->endSection() ?>