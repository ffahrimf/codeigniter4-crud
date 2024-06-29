<div class="container p-5">
    <a href="<?= base_url('/mobil/view'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div style="background-color: yellowgreen;" class="card-header text-white">
            <h4 class="card-title">Edit Mobil : <?= $mobil->nama_mobil; ?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('mobil/update'); ?>">
                <div class="form-group">
                    <label for="">Nama Mobil</label>
                    <input type="text" value="<?= $mobil->nama_mobil; ?>" name="nama_mobil" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Buatan</label>
                    <input type="text" value="<?= $mobil->buatan; ?>" name="buatan" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tahun</label>
                    <input type="text" value="<?= $mobil->tahun; ?>" name="tahun" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Harga Sewa</label>
                    <input type="number" value="<?= $mobil->harga_sewa; ?>" name="harga_sewa" required class="form-control">
                </div>
                <input type="hidden" value="<?= $mobil->id; ?>" name="id">
                <button class="btn btn-success">Edit Data</button>
            </form>

        </div>
    </div>
</div>