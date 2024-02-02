<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Kami</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/kontak.css">
</head>
<body style="background-image: url('images/paketbg.jpg')">

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
    <h1 class="display-4">Hubungi Kami</h1>
  </div>
</div>

<div class="container mt-5">
    <div class="row mt-4">
        <div class="col-md-6 mx-auto text-center"> <!-- Tambahkan class mx-auto dan text-center di sini -->
            <p>For inquiries or assistance, you can reach us through the following channels:</p>
            
            <div class="d-flex justify-content-center"> <!-- Tambahkan class justify-content-center di sini -->
                <a href="https://www.instagram.com/rindamantravel" target="_blank" class="social-icon">
                    <img src="{{ asset('images/instagram.jpg') }}" alt="Instagram">
                </a>
                <a href="https://www.youtube.com/rindamanchannel" target="_blank" class="social-icon">
                    <img src="{{ asset('images/youtube.jpg') }}" alt="YouTube">
                </a>
                <a href="https://www.tiktok.com/@rindamantiktok" target="_blank" class="social-icon">
                    <img src="{{ asset('images/tiktok.jpg') }}" alt="TikTok">
                </a>
                <a href="rindama@gmail.com" class="social-icon">
                    <img src="{{ asset('images/email.jpg') }}" alt="Email">
                </a>
                <a href="https://wa.me/098764553661" target="_blank" class="social-icon">
                    <img src="{{ asset('images/whatsapp.jpg') }}" alt="WhatsApp">
                </a>
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