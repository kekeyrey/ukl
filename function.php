<?php
// isi nama host, username mysql, dan password mysql
$databaseHost = "localhost";
$databaseName = "kts";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//$host = mysqli_connect("localhost","root","");

if($mysqli){
    ("Koneksi Berhasil"  . mysqli_connect_error());
}else{
     "Koneksi Gagal";
}
?>

<?php
$server ="localhost";
$username = "root";
$password = "";
$database_name = "kts";

$conn = mysqli_connect ($server, $username, $password, $database_name);

function registrasi($data){
    global $conn;
    
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
    mysqli_query($conn , "INSERT INTO user_pendonasi VALUES (NULL , '$username', '$email', '$password' )");

    return mysqli_affected_rows($conn);

}

?>