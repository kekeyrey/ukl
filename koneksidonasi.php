<?php
include("koneksi.php");

// Memeriksa apakah formulir telah disubmit
if (isset($_POST['save'])) {
    $tujuan_donasi = $mysqli->real_escape_string($_POST['tujuan_donasi']);
    $deskripsi_donasi = $mysqli->real_escape_string($_POST['deskripsi']);
    $foto = $mysqli->real_escape_string($_POST['foto']);

    // Menyimpan data ke database
    $sql = "INSERT INTO donasi (tujuan_donasi,deskripsi,foto ) 
            VALUES ('$tujuan_donasi', '$deskripsi_donasi', '$foto')";

if ($mysqli->query($sql) === TRUE) {
    echo "berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}

$mysqli->close();
?>
