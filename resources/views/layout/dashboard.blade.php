<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Rindaman Travel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/destinasi_page">Destinasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/paket_page">Paket Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kontak_page">Kontak</a>
        </li>
      </ul>
      <div class="ms-auto"> <!-- Menambahkan kelas d-sm-block d-md-none pada tombol login -->
        <a class="btn btn-outline-primary" href="/login_page">Login</a>
      </div>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/wisata 1.png" class="d-block w-100" alt="Destinasi 1">
      <div class="carousel-caption d-none d-md-block">
        <h2>Destinasi Eksotis</h2>
        <p>Temukan keindahan alam yang menakjubkan di destinasi kami.</p>
        <a href="#" class="btn btn-booking">Booking Sekarang</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/wisata 2.png" class="d-block w-100" alt="Destinasi 2">
      <div class="carousel-caption d-none d-md-block">
        <h2>Pengalaman Wisata Terbaik</h2>
        <p>Rasakan petualangan tak terlupakan bersama kami.</p>
        <a href="#" class="btn btn-booking">Booking Sekarang</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/wisata 3.png" class="d-block w-100" alt="Destinasi 3">
      <div class="carousel-caption d-none d-md-block">
        <h2>Liburan Impian Anda</h2>
        <p>Temukan liburan impian Anda bersama kami.</p>
        <a href="#" class="btn btn-booking">Booking Sekarang</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Section Destinasi Wisata -->
<div class="destination-section">
  <div class="container">
    <h2 class="text-center mb-4">Destinasi Wisata Unggulan</h2>
    <div class="row">
      <div class="col-md-4 destination-item">
        <img src="images/bromo.png" alt="Destinasi 1" class="img-fluid">
        <h3>Gunung Bromo</h3>
        <p>Temukan keindahan alam yang menakjubkan di destinasi ini.</p>
      </div>
      <div class="col-md-4 destination-item">
        <img src="images/raja ampat.png" alt="Destinasi 2" class="img-fluid">
        <h3>Raja Ampat</h3>
        <p>Temukan petualangan tak terlupakan di destinasi ini.</p>
      </div>
      <div class="col-md-4 destination-item">
        <img src="images/borobudur.png" alt="Destinasi 3" class="img-fluid">
        <h3>Candi Borobudur</h3>
        <p>Rasakan liburan impian Anda di destinasi ini.</p>
      </div>
    </div>
  </div>
</div>

<!-- Section Parallax -->
<div class="parallax-section">
  <div class="container">
    <h2 class="mb-4">Jelajahi Dunia Dengan Kami</h2>
    <p class="lead">Temukan keindahan dunia dengan paket wisata eksklusif kami.</p>
    <a href="#" class="btn btn-booking">Lihat Paket Wisata</a>
  </div>
</div>

<!-- Section Call to Action -->
<div class="cta-section">
  <div class="container">
    <h3 class="mb-4">Bergabunglah dengan Kami untuk Pengalaman Wisata Terbaik!</h3>
    <a href="#" class="btn btn-booking">Daftar Sekarang</a>
  </div>
</div>

<!-- Section Maps -->
<div class="map-section">
  <div class="container">
  <h2 class="mb-4">Temukan Kami Di Sini</h2>
    <div id="google-map" style="height: 400px;"></div>
  </div>
</div>

<script>
  function initMap() {
    // Koordinat lokasi Anda
    var myLatLng = {lat: -7.2911757, lng: 112.7810552};

    // Membuat peta
    var map = new google.maps.Map(document.getElementById('google-map'), {
      center: myLatLng,
      zoom: 15
    });

    // Menambahkan marker
    var marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'Lokasi Kami'
    });
  }
</script>

<!-- Section Ulasan dan Testimoni -->
<div class="review-section">
  <div class="container">
    <h2 class="text-center mb-4">Ulasan dan Testimoni</h2>
    <div class="row">
      <div class="col-md-4 review-item">
        <img src="images/ultramen.png" alt="User 1" class="img-fluid">
        <h4>Ultraman</h4>
        <p>"Pelayanan yang luar biasa! Destinasi yang menakjubkan. Saya pasti akan kembali!"</p>
      </div>
      <div class="col-md-4 review-item">
        <img src="images/powerranger.png" alt="User 2" class="img-fluid">
        <h4>Ranger Merah</h4>
        <p>"Paket wisata yang sangat terorganisir. Pengalaman yang luar biasa!"</p>
      </div>
      <div class="col-md-4 review-item">
        <img src="images/superman.png" alt="User 3" class="img-fluid">
        <h4>Superman</h4>
        <p>"Liburan impian saya menjadi kenyataan berkat Travel Wisata. Terima kasih!"</p>
      </div>
    </div>
  </div>
</div>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBIuWRczxQQCvYmJokF-21C2IRA-bM7Z8&callback=initMap">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>