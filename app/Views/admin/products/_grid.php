<?php helper('my'); ?>

            <div class="table-responsive">
                <table id="example" style="width:100%" class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center info"><input type="checkbox" name="checkAll" class="checkAll"></th>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Akun</th>
                            <th>Judul</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Kondisi</th>
                            <th>Deskripsi</th>
                            <th>Label</th>
                            <th>Kota</th>
                            <th>Status</th>
                            <th style="width: 150px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" name="row" class="checkboxes" value="<?= $product['id'] ?>" >
                            </td>
                            <td><?= $product['id'] ?></td>
                            <td><img src="<?= getUploadPathProduct($product) . $product['gambar'] ?>" width="100"></td>
                            <td><?php $id = array_search($product['akun'], array_column($akuns, 'id')); print_r($akuns[$id]['username']); ?></td>
                            <td><?= $product['title'] ?></td>
                            <td><?= getCurrency($product['price']) ?></td>
                            <td><?= $product['category'] ?></td>
                            <td><?= $product['condition'] ?></td>
                            <td><?= $product['description'] ?></td>
                            <td><?= $product['label'] ?></td>
                            <td><?= $product['target'] ?></td>
                            <td><?= ($product['status']=="1") ? 'Publish' : 'Pending'; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/produk/show/<?= $product['id'] ?>" class="btn btn-success"><i class="fas fa-eye"></i> View</a>
                                <a href="/produk/edit/<?= $product['id'] ?>" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                                <a href="/produk/delete/<?= $product['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div style="float: right">
            <?php echo $pager->links('default', 'default_full') ?>
            </div>