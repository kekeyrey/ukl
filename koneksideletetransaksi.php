<?php
//koneksi database
include_once("koneksi.php");

//get id from URL to delete that user
$idtransaksi = $_GET['idtransaksi'];

//deleted user row from table based on given is
$result = mysqli_query($mysqli, "DELETE FROM transaksi  WHERE idtransaksi = '$idtransaksi'");

//after delete redirect to home, so that latest user list will be displayed
header("location:tabeltransaksi.php");
?>