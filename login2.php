<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #03AED2;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-box {
        background-color: #CAF4FF;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    .login-box h2 {
        text-align: center;
    }

    .login-box input[type="text"],
    .login-box input[type="password"],
    .login-box input[type="submit"] {
        width: calc(100% - 10px);
        padding: 15px;
        margin: 20px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    .login-box input[type="submit"] {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
    }

    .login-box input[type="submit"]:hover {
        background-color: #45a049;
    }
    .register-link p a {
  color: #2C4E80;
  text-decoration: none;
  font-weight: 600;
}

.register-link p a:hover {
  text-decoration: underline;
}

</style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>
    <form action="koneksilogin.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
        <div class="register-link">
        <p>belom punya akun? <a href="register2.php"> Yuk daftar</a></p></div>
    </form>
</div>

</body>
</html>
