<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <title>Document</title>

    <style>
        :root {

            --utama: #E9573F;
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

        body {
            color: var(--ketiga);
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 30px 0;
            border-radius: 4px;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px 25px;
            border-radius: 4px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
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
            text-align: center;
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
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
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

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 4px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        .form-inline {
            margin-top: 30px;
        }

        .status-submitted {
            background-color: var(--secondary-color);
            width: 75px;
            /* Ubah warna latar belakang untuk status 'submitted' */
        }

        .status-approved {
            width: 75px;
            background-color: var(--warning-color);
            /* Ubah warna latar belakang untuk status 'approved' */
        }

        .status-rejected {
            width: 75px;
            background-color: var(--danger-color);
            /* Ubah warna latar belakang untuk status 'rejected' */
        }

        .status-completed {
            width: 75px;
            background-color: var(--success-color);
            /* Ubah warna latar belakang untuk status 'completed' */
        }

        .badge {
            border-radius: 3px;
        }

        .btn {
            color: white;
            padding-top: 8px;
            padding-bottom: 8px;
            background-color: var(--kedua);
        }

        .btn:hover {
            /* width: 100%; */
            background-color: #CF4C38;
            color: #F3F1F6;
        }
    </style>

</head>

<body style="background-color: #f5f5f5;">
    <div class="container">

        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <h2>Data <b>Barang</b></h2>
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-hover" id="mytable">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getBarang as $isi) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $isi['nama_barang']; ?></td>
                                <td><?= $isi['qty']; ?></td>
                                <td>Rp<?= number_format($isi['harga_beli']); ?>,-</td>
                                <td>Rp<?= number_format($isi['harga_jual']); ?>,-</td>
                                <td>
                                    <a href="<?= base_url('barang/edit/' . $isi['id_barang']); ?>" class="btn" style="color: white;">
                                        Edit</a>
                                    <a href="<?= base_url('barang/hapus/' . $isi['id_barang']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')" style="color: white;" class="btn">
                                        Hapus</a>


                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#mytable').DataTable({
                searching: true // Aktifkan fitur pencarian
            });
        });
    </script>


</body>

</html>