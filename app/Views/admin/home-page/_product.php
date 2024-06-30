<?php
if(!empty($product) && is_array($product)) $product = $product[0];
?>
<form action="/home-page/store" method="post">
            <div class="form-group col-md-6">
                <label for="color">Color</label>
                <div id="cpProduct" class="input-group colorpicker-component">
                <input type="text" class="form-control" id="color" name="color" value="<?= isset($product['color']) ? $product['color'] : '#305AA2' ?>" required>
                    <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i style="background-color: rgb(0, 170, 187);"></i></span>
                    </span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class="d-none" for="tampil">Tampil</label>                
                <select class="form-control d-none" id="tampil" name="tampil">
                    <option value="yes" <?= isset($product['tampil']) && $product['tampil'] == 'yes' ? 'selected' : '' ?>>Yes</option>
                    <option value="no" <?= isset($product['tampil']) && $product['tampil'] == 'no' ? 'selected' : '' ?>>No</option>
                </select>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil" <?= isset($product['tampil']) && $product['tampil'] == 'yes' ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                </div>
            </div>
            <input type="hidden" name="form_type" value="product">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

<?= $this->section('javascript') ?>
<script>
    $(function () {
        // Basic instantiation:
        $('#cpProduct').colorpicker({
            format: 'auto'
        });
      
    });
</script>
<?= $this->endSection() ?>