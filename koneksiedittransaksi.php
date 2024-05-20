<?php

include ("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $idtransaksi=$_POST['idtransaksi'];
    $no_tlpn=$_POST['no_tlpn'];
    $jumlah_donasi=$_POST['jumlah_donasi'];
    $no_rekening=$_POST['no_rekening'];

    // buat query update
    $result = mysqli_query($mysqli, "UPDATE transaksi
    SET no_tlpn='$no_tlpn',jumlah_donasi='$jumlah_donasi',no_rekening= $no_rekening
    WHERE idtransaksi=$idtransaksi");
    header('location:editdatatransaksi.php');
}else{
    die("Akses dilarang....");
}
?>