<?php
require 'function.php';


if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0 ) {
      echo "<script>
      alert('user berhasil di tambahkan')
      </script>";
    }
    else{
      echo mysqli_error($conn);
    }
  }
  

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Register</title>
    <link rel="stylesheet" href="register.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <div class="wrapper">
      <form action="register.php" method="post">
        <h1>Register</h1>
          <div class="input-box">
            <input type="text" name="username" placeholder="Username" required>
            <i class='bx bxs-user'></i>
          </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Email" required>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox"> Remember Me </label>
          <a href="#">Forgot password?</a>
        </div>

        <input type="submit" value="Register" class="button" name="register">


        <div class="register-link">
          <p>Sudah punya akun? <a href="login.html"> Yuk Login</a></p>
        </div>
      </form>
  </body>
</html>
