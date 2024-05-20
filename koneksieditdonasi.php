<?php

include ("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $iddonasi=$_POST['iddonasi'];
    $tujuan_donasi=$_POST['tujuan_donasi'];
    $deskripsi=$_POST['deskripsi'];

    // buat query update
    $result = mysqli_query($mysqli, "UPDATE donasi
    SET tujuan_donasi='$tujuan_donasi',deskripsi=$deskripsi'
    WHERE iddonasi=$iddonasi");
    header('location:editdatadonasi.php');
}else{
    die("Akses dilarang....");
}
?>