<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Invitor | Undangan Seminar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/seminar/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/seminar/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/seminar/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/seminar/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/seminar/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/seminar/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TheEvent - v4.9.1
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="text-center">
    <div class="hero-container" style="margin-top: 10em;" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-9 pb-0">{{ $undangan->kategori->nama_kategori }}<br><span>{{ $undangan->judul }}</span></h1>
      {{-- <p class="mb-6 pb-0">Kepada {{ $undangan->tamu->nama_tamu }}</p> --}}
    </div>
  </section><!-- End Hero Section -->

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>Deskripsi seminar</h2>
            <p>{{ $undangan->deskripsi }}</p>
          </div>
          <div class="col-lg-3">
            <h3>Alamat seminar</h3>
            <p>{{ $undangan->tempat }}</p>
          </div>
          <div class="col-lg-3">
            <h3>Jadwal seminar</h3>
            <p>{{ $undangan->waktu }}<br>{{ $undangan->jam }}</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Speakers Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Juru bicara seminar</h2>
          <p>Bagaimana cara menjadi Fullstack Web Developer?</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mx-auto">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="/seminar/assets/img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Sandika Galih</a></h3>
                <p>Deskripsi juru bicara</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Speakers Section -->
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h1 class="my-5">Map Lokasi</h1>
            <div class="mapouter" style="margin-bottom: 7em;"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=628&amp;height=400&amp;hl=en&amp;q={{ $undangan->tempat }}&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h3 class="fw-bold text-center">Scan</h3>
            <div class="visible-print text-center">
          {!! QrCode::size(300)->generate(Request::url()); !!}
      </div>
      <div class="text-center">
      <a href="{{ route('undangan.index') }}" class="btn btn-sm btn-danger rounded mt-5">Kembali</a>
      </div>
          </div>
        </div>
      </div>
    </section>
    
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="/seminar/assets/vendor/aos/aos.js"></script>
  <script src="/seminar/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/seminar/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/seminar/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/seminar/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/seminar/assets/js/main.js"></script>

</body>

</html>