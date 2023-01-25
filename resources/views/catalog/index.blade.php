<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Katalog MunjungAgung Plastik - Solusi Agung Plastik</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.css"/>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center">
        <img src="assets/img/logoo.png" alt="">
        <!-- <span>FlexStart</span> -->
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('home.index') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home.index') }}">About</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home.index') }}">Services</a></li>
          {{-- <li><a class="nav-link scrollto" href="{{ route('catalog.index') }}">Pricing</a></li> --}}
          <li><a class="nav-link scrollto" href="{{ route('home.index') }}">FAQ</a></li>
          <li><a class="getstarted scrollto" href="{{ route('home.index') }}">Hubungi Kami </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('home.index') }}">Home</a></li>
          <li>Katalog</li>
        </ol>
        <h2>Katalog MunjungAgung Plastik</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <div class="card mt-2">
            <div class="card-body">
              {{-- <a href="{{ route('home.index') }}" class="btn btn-primary mb-4">Back To Home</a>
              <a href="{{ route('catalog.create') }}" class="btn btn-primary mb-4">Add</a> --}}
                <table class="table table-bordered table-hover table-striped" id="myTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Item</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Isi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($catalogs as $no => $item)
                      <tr>
                          <td>{{ $no+1 }}</td>
                          <td>{{ $item->name_item }}</td>
                          <td>{{ $item->category }}</td>
                          <td>{{ mataUang_IDR($item->price) }}</td>
                          <td>{{ $item->pcs_item }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="#about" class="logo d-flex align-items-center">
              <img src="assets/img/logoo.png" alt="">
            </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde in veniam ab ullam fugit, necessitatibus possimus impedit, accusamus, quam ipsam reprehenderit distinctio iste inventore totam consectetur placeat enim quis blanditiis?</p>
            <div class="social-links mt-3">
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('catalog.index') }}">Price List</a></li>
            </ul>
          </div>

          {{-- <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> --}}

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Cluster MunjungAgung Asri<br>
              Kramat, Kab. Tegal<br>
              Jawa Tengah<br><br>
              <strong>Phone:</strong> 0857-0136-6698<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      {{-- <div class="copyright">
        &copy; Copyright <strong><span>Solusi Project</span></strong>. All Rights Reserved Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> --}}
      
    </div>
  </footer><!-- End Footer -->

  <a href="https://wa.me/6285701366698" target="_blank" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.slim.js"
    integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>

    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>