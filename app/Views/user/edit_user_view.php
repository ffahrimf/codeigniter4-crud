<div class="container p-5">
    <a href="<?= base_url('/user/view'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div style="background-color: yellowgreen;" class="card-header text-white">
            <h4 class="card-title">Edit User : <?= $user->user_name; ?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('user/update'); ?>">
                <div class="form-group">
                    <label for="">User Name</label>
                    <input type="text" value="<?= $user->user_name; ?>" name="user_name" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">User Email</label>
                    <input type="email" value="<?= $user->user_email; ?>" name="user_email" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">User Password</label>
                    <input type="password" value="<?= $user->user_password; ?>" name="user_password" required class="form-control">
                </div>

                <input type="hidden" value="<?= $user->user_created_at; ?>" name="user_created_at" required class="form-control">
                <input type="hidden" value="<?= $user->user_id; ?>" name="user_id">

                <button class="btn btn-success">Edit Data</button>
            </form>

        </div>
    </div>
</div>