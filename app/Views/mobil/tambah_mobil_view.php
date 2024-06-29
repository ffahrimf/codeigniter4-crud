<div class="container p-5">
    <a href="<?= base_url('/mobil/view'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div style="background-color: yellowgreen;" class="card-header text-white">
            <h4 class="card-title">Tambah Data Mobil</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('mobil/add'); ?>">
                <div class="form-group">
                    <label for="">Nama Mobil</label>
                    <input type="text" name="nama_mobil" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Buatan</label>
                    <input type="text" name="buatan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tahun</label>
                    <input type="text" name="tahun" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Sewa</label>
                    <input type="number" name="harga_sewa" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>

        </div>
    </div>
</div>