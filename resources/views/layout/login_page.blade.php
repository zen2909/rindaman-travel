<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script>src="https://code.jquery.com/jquery-3.7.1.js";integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=";crossorigin="anonymous"></script>
</head>
<body style="background-image: url('images/login.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
<div class="alert alert-success alert-dismissible fade fixed-top" role="alert" id="successMessage">
    Registration successful!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <div class="wrapper">
    <form  id="Form" method="post" action="{{ url('/login') }}">
    @csrf
      <h1>Login Account</h1>
      <div class="input-box">
      <label for="username">Username</label>
        <input type="text" placeholder="Username" name="name" autocomplete="off" id="username" required>
        <i class='bx bxs-user'></i>
      </div>
      @error('username')
        <small>{{$message}}</small>
      @enderror
      <div class="input-box">
      <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" autocomplete="off" id="password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div id="error-container" class="error-container">
        @if(Session::has('error'))
            {{ Session::get('error') }}
        @endif
      </div>
      @error('password')
        <small>{{$message}}</small>
      @enderror
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" id="loginButton" class="btn btn-primary btn-block">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="/register_page">Register</a></p>
      </div>
    </form>

    <script>
      $(document).ready(function() {
        $("#loginButton").click(function() {
          var formData = new FormData($("#Form")[0]);

          $.ajax({
            type: 'POST',
            url: '/login',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
              if (data.redirect) {
                console.log('Redirecting to', data.redirect);
                window.location.href = data.redirect; // Sesuaikan dengan rute beranda setelah login
              } else {
                console.log('Redirecting to', data.redirect);
                window.location.href = data.redirect;
                $("#Form")[0].reset();
            $("#successMessage").addClass("show");
            setTimeout(function() {
              $("#successMessage").removeClass("show");
              }
          )}
            },
            error: function(error) {
              console.error('Error:', error);
            }
          });
        });
      });
    </script>


<!-- JavaScript untuk menghandle proses login -->
<!-- <script>
document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Ambil data dari formulir
    var formData = new FormData(e.target);

    // Kirim permintaan Ajax ke endpoint login
    fetch('/login', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
    // Handle respons dari server
    console.log('Server Response:', data);
   
    if (data.redirect) {
        console.log('Redirecting to', data.redirect);
        window.location.href = data.redirect; // Sesuaikan dengan rute beranda setelah login
    } else {
        alert('Login Gagal, Username atau Password salah' + data.message)
    }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
</script> -->
</body>