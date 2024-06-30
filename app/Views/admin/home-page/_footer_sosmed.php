<?php
if(!empty($footer_sosmed) && is_array($footer_sosmed)) $footer_sosmed = $footer_sosmed[0];
?>
<form action="/home-page/store" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($footer_sosmed['id']) ? $footer_sosmed['id'] : '' ?>">
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Facebook</label>
                    <input type="text" class="form-control" id="link_facebook" name="link_facebook" value="<?= isset($footer_sosmed['link_facebook']) ? $footer_sosmed['link_facebook'] : '' ?>" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil_facebook" <?= isset($footer_sosmed['tampil_facebook']) && $footer_sosmed['tampil_facebook'] == 'yes' ? 'checked' : '' ?>>
                        <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Instagram</label>
                    <input type="text" class="form-control" id="link_instagram" name="link_instagram" value="<?= isset($footer_sosmed['link_instagram']) ? $footer_sosmed['link_instagram'] : '' ?>" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch2" name="tampil_instagram" <?= isset($footer_sosmed['tampil_instagram']) && $footer_sosmed['tampil_instagram'] == 'yes' ? 'checked' : '' ?>>
                        <label class="custom-control-label" for="tampilSwitch2">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Tiktok</label>
                    <input type="text" class="form-control" id="link_tiktok" name="link_tiktok" value="<?= isset($footer_sosmed['link_tiktok']) ? $footer_sosmed['link_tiktok'] : '' ?>" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch3" name="tampil_tiktok" <?= isset($footer_sosmed['tampil_tiktok']) && $footer_sosmed['tampil_tiktok'] == 'yes' ? 'checked' : '' ?>>
                        <label class="custom-control-label" for="tampilSwitch3">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Youtube</label>
                    <input type="text" class="form-control" id="link_youtube" name="link_youtube" value="<?= isset($footer_sosmed['link_youtube']) ? $footer_sosmed['link_youtube'] : '' ?>" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch4" name="tampil_youtube" <?= isset($footer_sosmed['tampil_youtube']) && $footer_sosmed['tampil_youtube'] == 'yes' ? 'checked' : '' ?>>
                        <label class="custom-control-label" for="tampilSwitch4">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    p<label for="color">Link Profile Tokopedia</label>
                    <input type="text" class="form-control" id="link_tokopedia" name="link_tokopedia" value="<?= isset($footer_sosmed['link_tokopedia']) ? $footer_sosmed['link_tokopedia'] : '' ?>" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch5" name="tampil_tokopedia" <?= isset($footer_sosmed['tampil_tokopedia']) && $footer_sosmed['tampil_tokopedia'] == 'yes' ? 'checked' : '' ?>>
                        <label class="custom-control-label" for="tampilSwitch5">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Shopee</label>
                    <input type="text" class="form-control" id="link_shopee" name="link_shopee" value="<?= isset($footer_sosmed['link_shopee']) ? $footer_sosmed['link_shopee'] : '' ?>" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch6" name="tampil_shopee" <?= isset($footer_sosmed['tampil_shopee']) && $footer_sosmed['tampil_shopee'] == 'yes' ? 'checked' : '' ?>>
                        <label class="custom-control-label" for="tampilSwitch6">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Lazada</label>
                    <input type="text" class="form-control" id="link_lazada" name="link_lazada" value="<?= isset($footer_sosmed['link_lazada']) ? $footer_sosmed['link_lazada'] : '' ?>" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch7" name="tampil_lazada" <?= isset($footer_sosmed['tampil_lazada']) && $footer_sosmed['tampil_lazada'] == 'yes' ? 'checked' : '' ?>>
                        <label class="custom-control-label" for="tampilSwitch7">Tampilkan</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="form_type" value="sosmed">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

