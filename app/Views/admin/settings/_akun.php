<div class="card">
    <div class="card-body">
        <form action="/pengaturan/store" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($akun['id']) ? $akun['id'] : '' ?>">
            
            <div class="form-group">
                <label for="title">No Whatsapp</label>
                <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp" value="<?= isset($akun['no_whatsapp']) ? $akun['no_whatsapp'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Pesan</label>
                <textarea class="form-control" id="msg_whatsapp" name="msg_whatsapp" required><?= isset($akun['msg_whatsapp']) ? $akun['msg_whatsapp'] : '' ?></textarea>
            </div>
            <input type="hidden" name="form_type" value="akun">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</div>