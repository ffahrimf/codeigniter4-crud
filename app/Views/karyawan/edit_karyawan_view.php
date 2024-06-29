<div class="container p-5">
    <a href="<?= base_url('/karyawan/view'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div style="background-color: yellowgreen;" class="card-header text-white">
            <h4 class="card-title">Edit Karyawan : <?= $karyawan->nama; ?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('karyawan/update'); ?>">
                <div class="form-group">
                    <label for="">Nama Karyawan</label>
                    <input type="text" value="<?= $karyawan->nama; ?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="<?= $karyawan->alamat; ?>" name="alamat" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" value="<?= $karyawan->jabatan; ?>" name="jabatan" required class="form-control">
                </div>
                <input type="hidden" value="<?= $karyawan->nik; ?>" name="nik">
                <button class="btn btn-success">Edit Karyawan</button>
            </form>

        </div>
    </div>
</div>