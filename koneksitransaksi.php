<?php
include("koneksi.php");

// Memeriksa apakah formulir telah disubmit
if (isset($_POST['save'])) {
    $notelepon = $mysqli->real_escape_string($_POST['notelepon']);
    $jumlah_donasi = $mysqli->real_escape_string($_POST['jumlah_donasi']);
    $no_rekening = $mysqli->real_escape_string($_POST['no_rekening']);
    $tujuan_donasi = $mysqli->real_escape_string($_POST['tujuan_donasi']);

    // Menyimpan data ke database
    $sql = "INSERT INTO transaksi (notelepon, jumlah_donasi, no_rekening, tujuan_donasi) 
            VALUES ('$notelepon', '$jumlah_donasi', '$no_rekening', '$tujuan_donasi')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Transaksi berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

$mysqli->close();
?>
