<?php
session_start();
include 'koneksi.php'; // file koneksi ke database

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST['Submit']) && isset($_SESSION['iduser'])) {
    // Mengamankan nilai sesi
    $iduser = $_SESSION['iduser'];
    $iddonasi= $_POST['iddonasi'];
    $notelepon = $_POST['notelepon'];
    $jumlah_donasi = $_POST['jumlah_donasi'];
    $no_rekening = $_POST['no_rekening'];

    // Debugging: Print variable values
    echo "iduser: $iduser<br>";
    echo "iddonasi: $iddonasi<br>";
    echo "notelepon: $notelepon<br>";
    echo "jumlah_donasi: $jumlah_donasi<br>";
    echo "no_rekening: $no_rekening<br>";

    // Insert a new record
    $sql = "INSERT INTO transaksi (iduser, iddonasi, notelepon, jumlah_donasi, no_rekening) 
            VALUES ('$iduser', '$iddonasi', '$notelepon', '$jumlah_donasi', '$no_rekening')";
    
    if ($mysqli->query($sql)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Gagal menyimpan data: " . htmlspecialchars($mysqli->error);
    }
} else {
    echo "Gagal menyimpan data: Informasi tidak lengkap.";
}

$mysqli->close();
?>
