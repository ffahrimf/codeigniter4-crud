<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

<!-- <link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css"> -->

<link rel="stylesheet" href="/footer/fonts/icomoon/style.css">
<link rel="stylesheet" href="/footer/css/bootstrap.min.css">
<link rel="stylesheet" href="/footer/css/style.css">

<footer class="footer-48201">

  <div class="container">
    <div class="row">
      <div class="col-md-4 pr-md-5">
        <a href="#" class="footer-site-logo d-block mb-4">Fahrurroji</a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quasi perferendis ratione perspiciatis accusantium.</p>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
          <li><a href="#">Clients</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Career</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#">Journal</a></li>
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="#">Partners</a></li>
        </ul>
      </div>
      <div class="col-md text-md-center">
        <ul class="social list-unstyled">
          <li><a target="_blank" href="https://instagram.com/ffahrimf"><span class="icon-instagram"></span></a></li>
          <li><a target="_blank" href="https://twitter.com/ffahrimf"><span class="icon-twitter"></span></a></li>
          <li><a href="#"><span class="icon-facebook"></span></a></li>
          <li><a target="_blank" href="https://pinterest.com/ffahrimf"><span class="icon-pinterest"></span></a></li>
          <li><a href="#"><span class="icon-dribbble"></span></a></li>
        </ul>
        <p class=""><a href="#" class="btn btn-tertiary">Contact Me</a></p>
      </div>
    </div>

    <div class="row ">
      <div class="col-12 text-center">
        <div class="copyright mt-5 pt-5">
          <p><small>&copy; 2019-2020 All Rights Reserved.</small></p>
        </div>
      </div>
    </div>
  </div>

</footer>

<script>
  // Ambil elemen input tanggal
  var userCreatedAtInput = document.getElementById('userCreatedAt');

  // Dapatkan tanggal saat ini
  var today = new Date();

  // Format tanggal menjadi 'YYYY-MM-DD'
  var yyyy = today.getFullYear();
  var mm = String(today.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
  var dd = String(today.getDate()).padStart(2, '0');
  var currentDate = yyyy + '-' + mm + '-' + dd;

  // Atur nilai input tanggal menjadi tanggal saat ini
  userCreatedAtInput.value = currentDate;
</script>

</body>

</html>