<?php
$mysqli = new mysqli('localhost', 'root', '', 'kts');
    $id=$_GET["id"];

    $result= mysqli_query($mysqli, "DELETE FROM user_pendonasi WHERE id='$id'");
    header("location:view tabel.php");
?>