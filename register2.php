<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
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

    .register-box {
        background-color: #CAF4FF;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    .register-box h2 {
        text-align: center;
    }

    .register-box input[type="text"],
    .register-box input[type="password"],
    .register-box input[type="email"],
    .register-box select,
    .register-box button[type="submit"] {
        width: calc(100% - 10px);
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    .register-box button[type="submit"] {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
    }

    .register-box button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="register-box">
    <h2>Register</h2>
    <form action="register2.php" method="post">
        <input type="text" name="username" placeholder="username" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required>
        <select name="role" required>
            <option value="">role</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <button type="submit" name="register">Register</button>
        <?php
            // check if form submitted, insert form data into users table.
            if(isset($_POST['register'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $role = "user";
            //echo($judul);
            // include database connetion file
            include_once("koneksi.php");

            //insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO user_pendonasi (username,email,password,role) 
            VALUES ('$username','$email','$password','$role')");

            //show message when user added 
            // echo "Data added succesfully. <a href= 'index.php,>view data</a>
            header("location:login2.php");
            } ?>
    </form>
</div>

</body>
</html>

       