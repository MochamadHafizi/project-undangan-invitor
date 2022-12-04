<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>Invitor | Undangan Konser Musik</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/musik/css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" href="/musik/css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="/musik/css/responsive.css" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/musik/css/jquery.mCustomScrollbar.min.css" />
    <!-- Tweaks for older IEs-->
    <link
      rel="stylesheet"
      href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen"
    />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
    ><![endif]-->
  </head>
  <!-- body -->

  <body class="main-layout">
    <!-- loader  -->

    <!-- end loader -->
    <!-- header -->
    <header>
      <!-- header inner -->
      <div class="header-top">
        <!-- end header inner -->

        <!-- end header -->
        <section class="slider_section">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li
                data-target="#myCarousel"
                data-slide-to="0"
                class="active"
              ></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container">
                  <div class="carousel-caption">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="text-bg">
                          <h3 class="text-white fw-bold">{{ $undangan->kategori->nama_kategori }}</h3>
                          <h4 class="text-white fw-bold">Untuk: {{ $undangan->tamu->nama_tamu }}</h4>
                          <h1>{{ $undangan->judul }}</h1>
                          <p>
                            {{ $undangan->deskripsi }}
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </header>

    <!-- about  -->
    <div id="about" class="about">
      <div class="container">
        <div class="row display_boxflex">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="about-box">
              <h2>Tanggal Dan Waktu</h2>
              <p>
                Acara di mulai pada Tanggal: {{ $undangan->waktu }}
              </p>
              <p>Jam : {{ $undangan->jam }}</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="about-box">
              <figure><img src="/musik/images/about.png" alt="#" /></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end abouts -->

    <!-- Gallery -->

    <div id="gallery" class="Gallery">
      <div class="container">
        <div class="row display_boxflex">
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                <div class="Gallery_img">
                  <figure><img src="/musik/images/Gallery1.jpg" alt="#" /></figure>
                </div>
                <div class="hover_box">
                  <ul class="icon_hu">
                    <h3>Enamore</h3>
                    <li>
                      <a href="#"><img src="/musik/icon/h.png" alt="#" /></a>
                    </li>
                    <li>
                      <a href="#"><img src="/musik/icon/h.png" alt="#" /></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                <div class="Gallery_img">
                  <figure><img src="/musik/images/Gallery2.jpg" alt="#" /></figure>
                </div>
                <div class="hover_box">
                  <ul class="icon_hu">
                    <h3>Reality Club</h3>
                    <li>
                      <a href="#"><img src="/musik/icon/h.png" alt="#" /></a>
                    </li>
                    <li>
                      <a href="#"><img src="/musik/icon/h.png" alt="#" /></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott1">
                <div class="Gallery_img">
                  <figure><img src="/musik/images/Gallery3.jpg" alt="#" /></figure>
                </div>
                <div class="hover_box">
                  <ul class="icon_hu">
                    <h3>The Panturas</h3>
                    <li>
                      <a href="#"><img src="/musik/icon/h.png" alt="#" /></a>
                    </li>
                    <li>
                      <a href="#"><img src="/musik/icon/h.png" alt="#" /></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="Gallery_img">
                  <figure><img src="/musik/images/Gallery4.jpg" alt="#" /></figure>
                </div>
                <div class="hover_box">
                  <ul class="icon_hu">
                    <h3>Fiersa Besari</h3>
                    <li>
                      <a href="#"><img src="/musik/icon/h.png" alt="#" /></a>
                    </li>
                    <li>
                      <a href="#"><img src="/musik/icon/h.png" alt="#" /></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="Gallery_text">
              <div class="titlepage">
                <h2>Tempat & Guest Star</h2>
              </div>
              <p>
               Acara diselenggarakan di <span class="fw-bold">{{ $undangan->tempat }}</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end Gallery -->

    <!-- Javascript files-->
    <script src="/musik/js/jquery.min.js"></script>
    <script src="/musik/js/popper.min.js"></script>
    <script src="/musik/js/bootstrap.bundle.min.js"></script>
    <script src="/musik/js/jquery-3.0.0.min.js"></script>
    <script src="/musik/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="/musik/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/musik/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  </body>
</html>
