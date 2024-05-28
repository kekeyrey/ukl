<?php
$mysqli = new mysqli('localhost', 'root', '', 'kts');
    $idtransaksi=$_GET["idtransaksi"];

    $result= mysqli_query($mysqli, "DELETE FROM transaksi WHERE idtransaksi='$idtransaksi'");
    header("location:tabeltransaksi.php");
?>