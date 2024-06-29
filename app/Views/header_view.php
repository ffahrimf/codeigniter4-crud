<!doctype html>
<html lang="en">

<head>
  <title><?= $title; ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Varela+Round&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>

<style>
  /* Tambahkan kode CSS kustom di sini */
  .navbar {
    background-color: yellowgreen;
  }

  .navbar-brand {
    font-size: 24px;
    font-weight: bold;
  }

  .nav-item {
    margin-right: 10px;
  }

  .nav-item:last-child {
    margin-right: 0;
    /* Hilangkan margin kanan pada item terakhir */
  }

  .nav-link {
    font-size: 1.1rem;
    transition: ease-in-out 0.3s;
  }

  .nav-link:hover {
    color: #85088B;
  }

  #about {
    background-color: #85088B;
    border-radius: 25px;
    padding-inline-start: 1rem;
    padding-inline-end: 1rem;
    transition: ease-in-out 0.3s;
    color: white;
  }

  #about:hover {
    background-color: #66066B;
    border-radius: 25px;
  }

  /* Tambahkan kode CSS untuk menu disorot di bawah ini */
  .navbar-nav .nav-item:not(:last-child):hover .nav-link {
    color: #85088B !important;
    /* background-color: #F8F9FA; */
  }
</style>


<body style="font-family:'Poppins';">
  <nav class="navbar navbar-expand-sm navbar-dark py-3">
    <div class="container">
      <a class="navbar-brand" href="/dashboard">Fahri Muh.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a style="color: white;" class="nav-link" href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link" href="/mobil/view">Data Mobil</a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link" href="/user/view">Data User</a>
          </li>
          <!-- <li class="nav-item">
            <a style="color: white;" class="nav-link" href="#">Contact</a>
          </li> -->
          <li class="nav-item">
            <a id="about" class="nav-link" href="/logout">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>