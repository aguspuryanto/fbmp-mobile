<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <h2 class="mt-0">Generate Content</h2>
            <div class="text-right">
                <a href="/konten/create" class="btn btn-primary mb-3">Tambah Content</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Artikel/ Deskripsi</th>
                            <th>Keyword Target</th>
                            <th>Hastag</th>
                            <!-- <th>Actions</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contents as $content): ?>
                        <tr>
                            <td><?= $content['id'] ?></td>
                            <td>
                                <?php 
                                //No WA + Kata Bombastis + Buying Keyword + Kata Kunci + Kota Target
                                $judul = $content['nomer_wa'] . ' ' . $content['list_kata_bombastis'] . ' ' . $content['list_buying_keyword'] . ' ' . $content['list_kata_kunci_target'] . $content['list_kota_target'];
                                echo $judul; ?>
                            </td>
                            <td><?php
                                // Judul + (Enter 2x) + Artikel + (Enter 2x) + Keyword Target + (Enter) + Hastag)
                                $artikel = $content['nomer_wa'] . ' ' . $content['list_kata_bombastis'] . ' ' . $content['list_buying_keyword'] . ' ' . $content['list_kata_kunci_target'] . $content['list_kota_target'] . '<br><br>';
                                $artikel .= $content['deskripsi_utama'] . '<br><br>';
                                $artikel .= $content['list_kata_kunci_target'] . '<br>';
                                $artikel .= '#' . preg_replace('/\s+/', '', $content['list_kata_kunci_target']);
                                echo $artikel; ?>
                            </td>
                            <td><?php
                                // Buying Keyword + Kata Kunci + Kota Target
                                echo $content['list_buying_keyword'] . ' ' . $content['list_kata_kunci_target'] . ' ' . $content['list_kota_target']; ?>
                            </td>
                            <td><?= '#' . preg_replace('/\s+/', '', $content['list_kata_kunci_target']) ?></td>
                            <!-- <td>
                                <a href="/contents/edit/<?= $content['id'] ?>" class="btn btn-warning">Edit</a>
                                <a href="/contents/delete/<?= $content['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td> -->
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>