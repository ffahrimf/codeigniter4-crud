<div class="container p-5">
    <a href="<?= base_url('/karyawan/view'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div style="background-color: yellowgreen;" class="card-header text-white">
            <h4 class="card-title">Tambah Data Karyawan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('karyawan/add'); ?>">
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" name="nik" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Karyawan</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>

        </div>
    </div>
</div>