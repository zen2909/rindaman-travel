<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destinasi Wisata</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/destinasi.css">
</head>
<body style="background-image: url('images/paketbg.jpg')">

<!-- Navbar -->
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
          <a class="nav-link" href="/kontak_pagr">Kontak</a>
        </li>
      </ul>
      <div class="ms-auto"> <!-- Menambahkan kelas d-sm-block d-md-none pada tombol login -->
        <a class="btn btn-outline-primary" href="/login_page">Login</a>
      </div>
    </div>
  </div>
</nav>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h1 class="display-4">Jelajahi Keindahan Alam</h1>
    <p class="lead">Temukan destinasi wisata yang menakjubkan dan nikmati momen tak terlupakan.</p>
  </div>
</div>

<!-- Destinasi Wisata -->
<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="images/bromo.png" class="card-img-top" alt="Destinasi 1">
        <div class="card-body">
          <h5 class="card-title">Gunung Bromo</h5>
          <p class="card-text">Gunung Bromo adalah gunung yang paling terkenal di Jawa Timur dengan kunjungan yang paling ramai setiap tahunnya. Gunung Bromo memiliki ketinggian 2.392 Meter dari atas permukaan laut dan berada dalam empat lingkup kabupaten, yaitu Probolinggo, Pasuruan, Lumajang dan Kabupaten Malang.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="images/raja ampat.png" class="card-img-top" alt="Destinasi 2">
        <div class="card-body">
          <h5 class="card-title">Raja Ampat</h5>
          <p class="card-text">Bagi penggemar kehidupan bawah laut, Raja Ampat menjadi salah satu destinasi yang wajib dikunjungi. Luas wilayahnya yang sekitar 9,8 juta acre—meliputi daratan dan lautan—menjadi rumah bagi 540 jenis terumbu karang, 700 jenis moluska, lima spesies penyu yang terancam punah, 57 udang mantis, serta 13 spesies mamalia laut.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="images/borobudur.png" class="card-img-top" alt="Destinasi 3">
        <div class="card-body">
          <h5 class="card-title">Candi Borobudur</h5>
          <p class="card-text">Candi Borobudur Terletak di Kabupaten Magelang, Jawa Tengah, candi yang sangat megah dan rupawan ini telah dikenal oleh wisatawan lokal maupun mancanegara sebagai kuil Buddha terbesar di dunia. Wajar saja, karena Candi Borobudur memiliki luas sekitar 2500 meter persegi, dengan panjang 121,66 meter, lebar 121,38 meter, dan tinggi 35,40 meter.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-white text-center py-3">
  <p>&copy; 2024 Destinasi Wisata. All rights reserved.</p>
</footer>

<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
