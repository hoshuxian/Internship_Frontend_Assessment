<!DOCTYPE html>
<html lang="en">
<style>
  #main {
  margin-left: 300px;
}

@media (max-width: 1199px) {
  #header {
    left: -300px;
  }

  #main {
    margin-left: 0;
  }
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }

  .breadcrumbs ol {
    display: block;
  }

  .breadcrumbs ol li {
    display: inline-block;
  }
}


    </style>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.bundle.min.js"></script>
  <!-- Favicons -->
  <link href="{{asset('import/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('import/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('import/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('import/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header" style="width:250px;">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="picedit.jpeg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">HO SHU XIAN</a></h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="/#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="/#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="/#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="/#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">
  @yield('content')
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="import/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="import/assets/vendor/aos/aos.js"></script>
  <script src="import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="import/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="import/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="import/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="import/assets/vendor/typed.js/typed.min.js"></script>
  <script src="import/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="import/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="import/assets/js/main.js"></script>

</body>
</html>