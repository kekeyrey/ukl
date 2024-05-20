<?php
//koneksi database
include_once("koneksi.php");

//get id from URL to delete that user
$iddonasi = $_GET['iddonasi'];

//deleted user row from table based on given is
$result = mysqli_query($mysqli, "DELETE FROM donasi WHERE iddonasi = '$iddonasi'");

//after delete redirect to home, so that latest user list will be displayed
header("location:tabeldonasi.php");
?>