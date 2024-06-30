<?php helper('my'); ?>

<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= $product['id'] ?></td>
                            <td><img src="<?= getUploadPathProduct($product) . $product['gambar'] ?>" width="100"></td>
                            <td><?= $product['nama_produk'] ?></td>
                            <td><?= getCurrency($product['harga']) ?></td>
                            <td><?= $product['pstatus'] ?></td>
                            <td>
                                <a href="/produk/edit/<?= $product['id'] ?>" class="btn btn-warning">Edit</a>
                                <a href="/produk/delete/<?= $product['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>