<?php
// mengaktifkan session pada php
session_start();
include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$login = mysqli_query($mysqli,"SELECT * from user_pendonasi 
where username = '$username' and password= '$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['role']=="admin"){

        // buat session login dan username 
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:berandaadmin2.php");

    // cek jika user login sebagai user 
    }else if($data['role']=="user"){
        // buat session login dan username 
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        $_SESSION['role']="user";
        // alihkan ke halaman dashboard user
        header("location:berandauser.php");

    }else{

        // alihkan ke halaman login kembali 
        header("location:login2.php");
    }
}else{
    header("location:berandauser.php?pesan=gagal");   
}

?>



