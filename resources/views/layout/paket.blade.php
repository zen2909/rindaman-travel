<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paket Wisata</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/paket.css">
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
          <a class="nav-link" href="/kontak_page">Kontak</a>
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
    <h1 class="display-4">Paket Wisata</h1>
  </div>
</div>

<!-- Paket Wisata -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">PLATINUM</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Harga:</strong> Rp 500.000</li>
            <li class="list-group-item"><strong>Fasilitas:</strong>Tour Guide, Transportasi, Makan</li>
            <li class="list-group-item"><strong>Waktu:</strong> 1 hari 1 malam</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">PREMIUM</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Harga:</strong> Rp 1.000.000</li>
            <li class="list-group-item"><strong>Fasilitas:</strong> Tour Guide, Transportasi, Makan, Souvenir</li>
            <li class="list-group-item"><strong>Waktu:</strong> 2 hari 1 malam</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">ULTIMATE</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Harga:</strong> Rp 2.000.000</li>
            <li class="list-group-item"><strong>Fasilitas:</strong> Tour Guide, Transportasi, Makan, Souvenir, Villa</li>
            <li class="list-group-item"><strong>Waktu:</strong> 3 Hari 2 Malam</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Tambahkan paket-paket lainnya di sini -->
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
