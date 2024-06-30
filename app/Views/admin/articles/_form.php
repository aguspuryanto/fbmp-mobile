
        <form action="/artikel/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="slug">Slug Url</label>
                <input type="text" class="form-control" id="slug" name="slug" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" rows="10" id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
            </div>
            <div class="form-group">
                <label for="label_seo">Label / Keyword Target (Meta Keyword SEO)</label>
                <input type="text" class="form-control" id="label_seo" name="label_seo" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <div id="preview"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add Article</button>
        </form>