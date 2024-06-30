<?php
if(!empty($footer_copyright) && is_array($footer_copyright)) $footer_copyright = $footer_copyright[0];
?>
<form action="/home-page/store" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($footer_copyright['id']) ? $footer_copyright['id'] : '' ?>">
            
            <div class="form-group">
                <label for="color">Copyright</label>
                <input type="text" class="form-control" id="copyright" name="copyright" value="<?= isset($footer_copyright['copyright']) ? $footer_copyright['copyright'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="color">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="<?= isset($footer_copyright['tahun']) ? $footer_copyright['tahun'] : ''; ?>" required>
            </div>
            <input type="hidden" name="form_type" value="copyright">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>