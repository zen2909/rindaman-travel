<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
  <link rel="stylesheet" href="css/register.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body style="background-image: url('images/login.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
<div class="alert alert-success alert-dismissible fade fixed-top" role="alert" id="successMessage">
    Registration successful!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <div class="wrapper">
  
    <form id="registerForm" method="post" action="{{ url('/register') }}">
      @csrf
      <h1>Register Account</h1>
      <div class="input-box">
        <label for="name">Username</label>
        <input type="text" placeholder="Username" name="name" autocomplete="off" id="username" required>
        <i class='bx bxs-user'></i>
      </div>
      @error('name')
      <p style="color: red;">{{ $message }}</p>
      @enderror
      <div class="input-box">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" autocomplete="off" id="password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      @error('password')
      <p style="color: red;">{{ $message }}</p>
      @enderror
      <div class="input-box">
        <label for="email">email</label>
        <input type="email" placeholder="email" name="email" autocomplete="off" id="email" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      @error('email')
      <p style="color: red;">{{ $message }}</p>
      @enderror
     
      <button type="submit" id="registerButton" class="btn btn-primary btn-block">Register</button>
      <div class="register-link">
        <p><a href="/login_page">Back To Login Page</a></p>
      </div>
    </form>
    <script>
      $(document).ready(function() {
        $("#registerButton").click(function() {
          var formData = new FormData($("#registerForm")[0]);

          $.ajax({
            type: 'POST',
            url: '/register',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
              if (data.success) {
                $("#registerForm")[0].reset();
            $("#successMessage").addClass("show");
            setTimeout(function() {
              $("#successMessage").removeClass("show");
            }, 3000); // Hapus pesan setelah 3 detik
              } else {
                $("#successMessage").text(''); // Clear success message
                alert('Registration failed. ');
              }
            },
            error: function(error) {
              console.error('Error:', error);
            }
          });
        });
      });
    </script>

    <!-- <script>
      async function registerUser() {
        var formData = new FormData(document.getElementById('Form'));

        try {
          const response = await fetch('/register', {
            method: 'POST',
            body: formData
          });

          const data = await response.json();

          if (data.success) {
            document.getElementById('registerForm').reset(); // Reset input fields
            document.getElementById('successMessage').innerText = 'Registration successful!';
          } else {
            document.getElementById('successMessage').innerText = ''; // Clear success message
            alert('Registration failed. ' + data.message);
          }
        } catch (error) {
          console.error('Error:', error);
        }
      }
    </script> -->
    <!-- <script>
        function validateForm() {
            var nameInput = document.getElementsByName('name')[0];
            var emailInput = document.getElementsByName('email')[0];
            var passwordInput = document.getElementsByName('password')[0];

            if (!nameInput.value.trim() || !emailInput.value.trim() || !passwordInput.value.trim()) {
                alert('Please fill in all fields.');
                event.preventDefault();
            }
        }
    </script> -->
  </div>