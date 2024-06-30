            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Project</th>
                            <th>User</th>
                            <th>Pass</th>
                            <th>Status</th>
                            <!-- <th>#</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($akuns as $akun): ?>
                        <tr>
                            <td><?= $akun['id'] ?></td>
                            <td><?= $akun['project_name'] ?></td>
                            <td><?= $akun['username'] ?></td>
                            <td><i class="fas fa-key"></i> "***"</td>
                            <td><?= $akun['status'] ?></td>
                            <!-- <td>
                                <a href="/akun/edit/<?= $akun['id'] ?>" class="btn btn-warning">Edit</a>
                                <a href="/akun/delete/<?= $akun['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td> -->
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>