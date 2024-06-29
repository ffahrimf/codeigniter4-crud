<style>
    :root {

        --utama: yellowgreen;
        --kedua: #FC6E51;
        --ketiga: #26577C;
        --keempat: #EBE4D1;
        --gray: #F3F1F6;
        --primary-color: #007bff;
        --secondary-color: #6c757d;
        --success-color: #28a745;
        --danger-color: #dc3545;
        --warning-color: #ffc107;
        --info-color: #17a2b8;
        --light-color: #f8f9fa;
        --dark-color: #343a40;
    }

    .table-responsive {
        margin: 10px 0;
        border-radius: 4px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .table-wrapper {
        min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
        border-radius: 4px;
    }

    .table-title {
        padding-bottom: 15px;
        background: var(--utama);
        color: #fff;
        padding: 16px 30px;
        margin: -20px -25px 10px;
        border-radius: 4px 4px 0 0;
    }

    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }

    .table-title .btn-group {
        float: right;
    }

    .table-title .btn {
        color: #fff;
        float: right;
        font-size: 13px;
        border: none;
        min-width: 50px;
        border-radius: 2px;
        border: none;
        outline: none !important;
        margin-left: 10px;
    }

    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }

    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }

    table.table tr th,
    table.table tr td {
        border-color: #e9e9e9;
        padding: 12px 15px;
        vertical-align: middle;
    }

    /* 
        table.table tr th:first-child {
            width: 150px;
        } */

    table.table tr th:last-child {
        /* width: 100px; */
        text-align: left;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }

    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }

    /* table.table td:last-child i { */
    /* opacity: 0.9; */
    /* font-size: 22px; */
    /* margin: 0 5px; */
    /* } */

    table.table td a {
        font-weight: 400;
        display: inline-block;
        text-decoration: none;
        outline: none !important;
    }

    table.table td a:hover {
        color: #ccc;
    }

    table.table td a.edit {
        color: #FFC107;
    }

    table.table td a.delete {
        color: #F44336;
    }

    table.table td i {
        font-size: 19px;
    }

    table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
    }
</style>


<div class="container mt-5">
    <a style="font-family: 'Poppins'; font-weight:400" href="<?= base_url('mobil/tambah'); ?>" class="btn btn-success mb-2">Tambah Data</a>
    <!-- <a style="font-family: 'Poppins'; font-weight:400" href="/logout" class="btn btn-danger mb-2" onclick="javascript:return confirm('Apakah anda yakin ingin logout ?')">Logout</a> -->


    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <h2>Data <b>Mobil</b></h2>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover" id="mytable">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Mobil</th>
                        <th>Buatan</th>
                        <th>Tahun</th>
                        <th>Harga Sewa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($getMobil as $isi) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $isi['nama_mobil']; ?></td>
                            <td><?= $isi['buatan']; ?></td>
                            <td><?= $isi['tahun']; ?></td>
                            <td>Rp<?= number_format($isi['harga_sewa']); ?>,-</td>
                            <td>
                                <a href="<?= base_url('mobil/edit/' . $isi['id']); ?>" class="btn btn-success" style="color: white;">
                                    Edit</a>
                                <a href="<?= base_url('mobil/hapus/' . $isi['id']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data mobil ?')" style="color: white;" class="btn btn-danger">
                                    Hapus</a>


                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>






</div>

<script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>