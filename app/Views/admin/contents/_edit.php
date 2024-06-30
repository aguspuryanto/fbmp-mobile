<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Content</title>
    <link href="/path-to-sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Content</h1>
        <form action="/contents/update/<?= $content['id'] ?>" method="post">
            <div class="form-group">
                <label for="list_kata_kunci_target">Target Keywords</label>
                <textarea class="form-control" id="list_kata_kunci_target" name="list_kata_kunci_target" required><?= $content['list_kata_kunci_target'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="list_buying_keyword">Buying Keywords</label>
                <textarea class="form-control" id="list_buying_keyword" name="list_buying_keyword" required><?= $content['list_buying_keyword'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="list_kata_bombastis">Bombastic Words</label>
                <textarea class="form-control" id="list_kata_bombastis" name="list_kata_bombastis" required><?= $content['list_kata_bombastis'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="nomer_wa">WA Number</label>
                <input type="text" class="form-control" id="nomer_wa" name="nomer_wa" value="<?= $content['nomer_wa'] ?>" required>
            </div>
            <div class="form-group">
                <label for="deskripsi_utama">Main Description</label>
                <textarea class="form-control" id="deskripsi_utama" name="deskripsi_utama" required><?= $content['deskripsi_utama'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="list_kota_target">Target Cities</label>
                <textarea class="form-control" id="list_kota_target" name="list_kota_target" required><?= $content['list_kota_target'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Content</button>
        </form>
    </div>
    <script src="/path-to-sb-admin-2/js/sb-admin-2.min.js"></script>
</body>
</html>
