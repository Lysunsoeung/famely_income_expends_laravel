<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MeFamily Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('frontend')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend')}}/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontpages.partials.header')
  <!-- End Header -->


  {{-- GALLERY VIEW --}}
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gallery</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Gallery</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="gallery-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-home">Home</li>
              <li data-filter=".filter-beach">Beach</li>
              <li data-filter=".filter-vacation">Vacation</li>
            </ul>
          </div>
        </div>

        <div class="row gallery-container">

          <div class="col-lg-4 col-md-6 gallery-item filter-home">
            <div class="gallery-wrap">
              <img src="{{asset('frontend')}}/assets/img/gallery/home-1.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Home 1</h4>
                <p>Home</p>
                <div class="gallery-links">
                  <a href="{{asset('frontend')}}/assets/img/gallery/home-1.jpg" class="glightbox" title="Home 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-vacation">
            <div class="gallery-wrap">
              <img src="{{asset('frontend')}}/assets/img/gallery/vacation-2.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Vacation 2</h4>
                <p>Vacation</p>
                <div class="gallery-links">
                  <a href="{{asset('frontend')}}/assets/img/gallery/vacation-2.jpg" class="glightbox" title="Vacation 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-home">
            <div class="gallery-wrap">
              <img src="{{asset('frontend')}}/assets/img/gallery/home-2.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Home 2</h4>
                <p>Home</p>
                <div class="gallery-links">
                  <a href="{{asset('frontend')}}/assets/img/gallery/home-2.jpg" class="glightbox" title="Home 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-beach">
            <div class="gallery-wrap">
              <img src="{{asset('frontend')}}/assets/img/gallery/beach-2.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Beach 2</h4>
                <p>Beach</p>
                <div class="gallery-links">
                  <a href="{{asset('frontend')}}/assets/img/gallery/beach-2.jpg" class="glightbox" title="Beach 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-vacation">
            <div class="gallery-wrap">
              <img src="{{asset('frontend')}}/assets/img/gallery/vacation-1.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Vacation 1</h4>
                <p>Vacation</p>
                <div class="gallery-links">
                  <a href="{{asset('frontend')}}/assets/img/gallery/vacation-1.jpg" class="glightbox" title="Vacation 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-home">
            <div class="gallery-wrap">
              <img src="{{asset('frontend')}}/assets/img/gallery/home-3.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Home 3</h4>
                <p>Home</p>
                <div class="gallery-links">
                  <a href="{{asset('frontend')}}/assets/img/gallery/home-3.jpg" class="glightbox" title="Home 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-beach">
            <div class="gallery-wrap">
              <img src="{{asset('frontend')}}/assets/img/gallery/beach-1.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Beach 1</h4>
                <p>Beach</p>
                <div class="gallery-links">
                  <a href="{{asset('frontend')}}/assets/img/gallery/beach-1.jpg" class="glightbox" title="Beach 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-beach">
            <div class="gallery-wrap">
              <img src="{{asset('frontend')}}/assets/img/gallery/beach-3.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Beach 3</h4>
                <p>Beach</p>
                <div class="gallery-links">
                  <a href="{{asset('frontend')}}/assets/img/gallery/beach-3.jpg" class="glightbox" title="Beach 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-vacation">
            <div class="gallery-wrap">
              <img src="{{asset('frontend')}}/assets/img/gallery/vacation-3.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Vacation 3</h4>
                <p>Vacation</p>
                <div class="gallery-links">
                  <a href="{{asset('frontend')}}/assets/img/gallery/vacation-3.jpg" class="glightbox" title="Vacation 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MeFamily</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MeFamily</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>










  <!-- Vendor JS Files -->
  <script src="{{asset('frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend')}}/assets/js/main.js"></script>

</body>

</html>