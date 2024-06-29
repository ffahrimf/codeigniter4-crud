<div class="container p-5">
    <a href="<?= base_url('/user/view'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div style="background-color: yellowgreen;" class="card-header text-white">
            <h4 class="card-title">Tambah Data User</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('user/add'); ?>">
                <div class="form-group">
                    <label for="">User Name</label>
                    <input type="text" name="user_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">User Email</label>
                    <input type="email" name="user_email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">User Password</label>
                    <input type="password" name="user_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">User Created At</label>
                    <input type="date" id="userCreatedAt" name="user_created_at" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>

        </div>
    </div>
</div>