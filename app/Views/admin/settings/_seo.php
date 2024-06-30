<div class="card">
    <div class="card-body">
        <form action="/pengaturan/store" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($meta['id']) ? $meta['id'] : '' ?>">
            
            <div class="form-group">
                <label for="title">Google Analytics</label>
                <input type="text" class="form-control" id="google_analytics" name="google_analytics" value="<?= isset($seo['google_analytics']) ? $seo['google_analytics'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Google Search Console</label>
                <textarea class="form-control" id="google_search_console" name="google_search_console" required><?= isset($seo['google_search_console']) ? $seo['google_search_console'] : '' ?></textarea>
            </div>
            <input type="hidden" name="form_type" value="seo">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</div>