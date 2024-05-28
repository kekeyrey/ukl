<?php
// mengaktifkan session pada php
session_start();
include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$login = mysqli_query($mysqli,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['iduser'] = $data['iduser']; // Tambahkan iduser ke session
    $_SESSION['iddonasi'] = $data['iddonasi'];

    // cek jika user login sebagai admin
    if($data['role'] == "admin"){
        $_SESSION['role'] = "admin";
        // alihkan ke halaman dashboard admi
        header("location:berandaadmin2.php");

    // cek jika user login sebagai user
    } else if($data['role'] == "user"){
        $_SESSION['role'] = "user";
        // alihkan ke halaman dashboard user
        header("location:index.php");

    } else {
        // alihkan ke halaman login kembali
        header("location:login.php");
    }
} else {
    header("location:index.php?pesan=gagal");
}


?>



