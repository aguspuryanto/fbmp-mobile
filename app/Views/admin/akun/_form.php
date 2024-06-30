        <form action="/akun/store" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($akun['id']) ? $akun['id'] : '' ?>">

            <div class="form-group">
                <label for="project_name">Nama Project</label>
                <input type="text" class="form-control" id="project_name" name="project_name" value="<?= isset($akun['project_name']) ? $akun['project_name'] : '' ?>" required>
            </div>

            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= isset($akun['username']) ? $akun['username'] : '' ?>" required>
            </div>

            <!-- <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= isset($akun['email']) ? $akun['email'] : '' ?>" required>
            </div> -->
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" value="<?= isset($akun['password']) ? $akun['password'] : '' ?>" required>
            </div>

            <!-- <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="admin" <?= isset($akun['role']) && $akun['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="user" <?= isset($akun['role']) && $akun['role'] == 'user' ? 'selected' : '' ?>>User</option>
                </select>
            </div> -->
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>