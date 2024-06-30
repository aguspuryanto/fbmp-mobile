<div class="card">
    <div class="card-body">
        <form action="/pengaturan/store" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($meta['id']) ? $meta['id'] : '' ?>">

            <div class="form-group">
                <label for="title">ID Pixel</label>
                <input type="text" class="form-control" id="id_pixel" name="id_pixel" value="<?= isset($meta['id_pixel']) ? $meta['id_pixel'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Event</label>
                <textarea class="form-control" id="event" name="event" required><?= isset($meta['event']) ? $meta['event'] : '' ?></textarea>
            </div>
            <input type="hidden" name="form_type" value="meta">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</div>