<?php

include ("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $id=$_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $role=$_POST['role'];

    // buat query update
    $result = mysqli_query($mysqli, "UPDATE user_pendonasi
    SET username='$username',email='$email',role='$role'
    WHERE id=$id");
    header('location:editdatauser.php');
}else{
    die("Akses dilarang....");
}
?>