<?php
if(!empty($slider) && is_array($slider)) $slider = $slider[0];
?>

<form action="/home-page/store" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($slider['id']) ? $slider['id'] : '' ?>">

            <div class="form-group col-md-6">
                <label for="slider1">Slider 1</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="slider1" name="slider1" required>
                    <label class="custom-file-label" for="slider1">Choose file</label>
                </div>
                <div id="preview-slider1">
                    <?php if(isset($slider['slider1']) && $slider['slider1']): ?>
                        <img src="/uploads/<?= $slider['slider1'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="slider2">Slider 2</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="slider2" name="slider2" required>
                    <label class="custom-file-label" for="slider2">Choose file</label>
                </div>
                <div id="preview-slider2">
                    <?php if(isset($slider['slider2']) && $slider['slider2']): ?>
                        <img src="/uploads/<?= $slider['slider2'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="slider3">Slider 3</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="slider3" name="slider3" required>
                    <label class="custom-file-label" for="slider3">Choose file</label>
                </div>
                <div id="preview-slider3">
                    <?php if(isset($slider['slider3']) && $slider['slider3']): ?>
                        <img src="/uploads/<?= $slider['slider3'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="slider4">Slider 4</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="slider4" name="slider4" required>
                    <label class="custom-file-label" for="slider4">Choose file</label>
                </div>
                <div id="preview-slider4">
                    <?php if(isset($slider['slider4']) && $slider['slider4']): ?>
                        <img src="/uploads/<?= $slider['slider4'] ?>" class="img-thumbnail">
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="color">Color</label>
                <div id="cpSlider" class="input-group colorpicker-component">
                    <input type="text" class="form-control" id="color" name="color" value="<?= isset($slider['color']) ? $slider['color'] : '#305AA2' ?>" required>
                    <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i style="background-color: rgb(0, 170, 187);"></i></span>
                    </span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="tampil">Tampil</label>
                <select class="form-control" id="tampil" name="tampil">
                    <option value="yes" <?= isset($slider['tampil']) && $slider['tampil'] == 'yes' ? 'selected' : '' ?>>Yes</option>
                    <option value="no" <?= isset($slider['tampil']) && $slider['tampil'] == 'no' ? 'selected' : '' ?>>No</option>
                </select>
            </div>
            <input type="hidden" name="form_type" value="slider">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

<?= $this->section('javascript') ?>
<script>
    $(function () {
        // Basic instantiation:
        $('#cpSlider').colorpicker({
            format: 'auto'
        });
      
    });
</script>
<?= $this->endSection() ?>