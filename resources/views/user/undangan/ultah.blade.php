<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Undangan Ulang Tahun</title>
    <style type="text/css">
        body { font-family: Arial;
        color: rgba(255, 255, 255, 0.843);
    background-size: cover; }
        p { font-family: 'Times New Roman', Times, serif, ; font-size: 50px;}
        div { font-family: 'arial'; } 
        h4 { font-family: Apple Chancery ;}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body background="/img/bg3.jpg" class="text-white">
    <section id="undanganulangtahun">
        <div class="container">
          <br>
            <div>
              <br>
              <br>
              <br>
                <p class="text-center mt-5">{{ $undangan->judul }}</p>
            </div>  
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="row justify-content-center text-center mt-1">
                <div class="col-md-4">Waktu: {{ $undangan->waktu }}</div>
                <div class="col-md-4">Tempat: {{ $undangan->tempat }}</div>
            </div>
            <div class="row justify-content-center text-center mt-1">
                <div class="col">Untuk: {{ $undangan->tamu->nama_tamu }}</div>
            </div>
            <h4 class="#h4 text-center mt-5">Deskripsi: {{ $undangan->deskripsi }}</h4>
            <h4 class="#h4 text-center mt-5">Susunan acara: {{ $undangan->susunan_acara }}</h4>
        </div>
         <div class="text-center">
            <a href="{{ route('undangan.index') }}" class="mt-5 btn btn-danger btn-sm ">Kembali</a>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>