<?php
$mysqli = new mysqli('localhost', 'root', '', 'kts');
    $iduser=$_GET["iduser"];

    $result= mysqli_query($mysqli, "DELETE FROM user WHERE iduser='$iduser'");
    header("location:tabeluser2.php");
?>