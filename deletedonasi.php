<?php
$mysqli = new mysqli('localhost', 'root', '', 'kts');
    $iddonasi=$_GET["iddonasi"];

    $result= mysqli_query($mysqli, "DELETE FROM donasi WHERE iddonasi='$iddonasi'");
    header("location:tabeldonasi.php");
?>