<?php helper('my'); ?>

            <div class="table-responsive">
                <table id="example" style="width:100%" class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center info"><input type="checkbox" name="checkAll" class="checkAll"></th>
                            <th>ID</th>
                            <th>Akun</th>
                            <th>Judul</th>
                            <th>Kota</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" name="row" class="checkboxes" value="<?= $product['id'] ?>" >
                            </td>
                            <td><?= $product['id'] ?></td>
                            <td><?php $id = array_search($product['akun'], array_column($akuns, 'id')); print_r($akuns[$id]['username']); ?></td>
                            <td><?= $product['title'] ?></td>
                            <td><?= $product['target'] ?></td>
                            <td><?= $product['status'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>