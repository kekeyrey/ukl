<?php 
include 'koneksi.php';
$tujuan_donasi = $_POST['tujuan_donasi'];
$deskripsi = $_POST['deskripsi'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:donasi.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO donasi VALUES(NULL,'$tujuan_donasi','$deskripsi'");
		header("location:donasi.php?alert=berhasil");
	}else{
		header("location:donasi.php?alert=gagal_ukuran");
	}
}