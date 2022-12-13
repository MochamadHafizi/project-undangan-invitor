<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Invitor | Undangan Pernikahan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="/pernikahan/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="/pernikahan/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/pernikahan/css/style.css" rel="stylesheet" />
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
      <div
        id="header-carousel"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div
            class="carousel-item position-relative active"
            style="height: 100vh; min-height: 400px"
          >
            <img
              class="position-absolute w-100 h-100"
              src="/pernikahan/img/carousel-1.jpg"
              style="object-fit: cover"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h2 class="display-4 font-secondary text-white mt-n3 mb-md-4">
                  {{ $undangan->kategori->nama_kategori }}
                </h2>
                <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">
                  {{ $undangan->judul }}
                </h1>
                <div
                  class="d-inline-block border-top border-bottom border-light py-3 px-4"
                >
                  <h5
                    class="text-uppercase font-weight-normal text-white m-0"
                    style="letter-spacing: 2px"
                  >
                  {{-- Kepada Saudara: {{ $undangan->tamu->nama_tamu }} --}}
              </h5>
                </div>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <div
            class="carousel-item position-relative"
            style="height: 100vh; min-height: 400px"
          >
            <img
              class="position-absolute w-100 h-100"
              src="/pernikahan/img/carousel-2.jpg"
              style="object-fit: cover"
            />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h2 class="display-4 font-secondary text-white mt-n3 mb-md-4">
                  {{ $undangan->kategori->nama_kategori }}
                </h2>
                <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">
                  {{ $undangan->judul }}
                </h1>
                <div
                  class="d-inline-block border-top border-bottom border-light py-3 px-4"
                >
                  <h5
                    class="text-uppercase font-weight-normal text-white m-0"
                    style="letter-spacing: 2px"
                  >
                    {{-- Kepada Saudara: {{ $undangan->tamu->nama_tamu }} --}}
                  </h5>
                </div>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev justify-content-start"
          href="#header-carousel"
          data-slide="prev"
        >
          <div class="btn btn-primary px-0" style="width: 68px; height: 68px">
            <span class="carousel-control-prev-icon mt-3"></span>
          </div>
        </a>
        <a
          class="carousel-control-next justify-content-end"
          href="#header-carousel"
          data-slide="next"
        >
          <div class="btn btn-primary px-0" style="width: 68px; height: 68px">
            <span class="carousel-control-next-icon mt-3"></span>
          </div>
        </a>
      </div>
    </div>
    <!-- Carousel End -->


    <!-- Event Start -->
    <div class="container-fluid py-5" id="event">
      <div class="container py-5">
        <div class="section-title position-relative text-center">
          <h1 class="font-secondary display-4">Deskripsi Acara</h1>
          <i class="far fa-heart text-dark"></i>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <h5 class="font-weight-normal text-muted mb-3 pb-3">
              {{ $undangan->deskripsi }}
            </h5>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 border-right border-primary">
            <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
              <img class="img-fluid mb-4" src="/pernikahan/img/event-1.jpg" alt="" />
              <h4 class="mb-3">Tanggal Dan Jam</h4>
              <p class="mb-2">{{ $undangan->waktu }}</p>
              <p class="mb-0">{{ $undangan->jam }}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-center text-md-left ml-md-3">
              <img class="img-fluid mb-4" src="/pernikahan/img/event-2.jpg" alt="" />
              <h4 class="mb-3">Tempat Acara</h4>
              <p class="mb-2">{{ $undangan->tempat }}</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="text-center">
              <img class="img-fluid mb-4" src="/pernikahan/img/event-1.jpg" alt="" />
              <h4 class="mb-3">Susunan Acara</h4>
              <p class="mb-2">{{ $undangan->susunan_acara }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Event End -->
    <div class="container-fluid py-5"  id="event">
      <div class="container py-5">
        <h3 class="text-center fw-bold mb-5">Scan Kode</h3 >
        <div class="visible-print text-center">
          {!! QrCode::size(300)->generate(Request::url()); !!}
      </div>
      <div class="text-center">
      <a href="{{ route('undangan.index') }}" class="btn btn-sm btn-danger rounded mt-5">Kembali</a>
      </div>
      </div>
    </div>

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/pernikahan/lib/easing/easing.min.js"></script>
    <script src="/pernikahan/lib/waypoints/waypoints.min.js"></script>
    <script src="/pernikahan/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/pernikahan/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/pernikahan/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/pernikahan/js/main.js"></script>
  </body>
</html>
