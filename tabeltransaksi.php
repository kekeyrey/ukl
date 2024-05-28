<!DOCTYPE html>
<html lang="en">
<head>
<title>Table Transaksi</title>
<style>
.judul{
     text-align: center;
     font-weight:600;
     color:black;
}
.tabel th{
    background-color:;    
    height:40px;
    padding:20px;
}
.tabel{
    border-collapse: collapse;
    font-size:20px;
    border:1px solid white;
    display: flex;
    justify-content: center; 
    align-items: center; 
}
.tabel td{
    padding:10px;
    height:25px;
}
.servicess {
    text-align: left ;
    padding-left: 90px;
  }
  
  .servicess button {
    margin-top: 50px;
    padding-left: 10px;
    width: 110px;
    border-radius: 10px;
    border: none;
    font-size: 30px;
  }
  
  .servicess button:hover {
    background-color: #9AD0C2;
    border: 2px solid white;
    color: #2D9596 ;
  }
        </style>
    </head> 
    <body>
    <div class="servicess">
        <a href="tabeldonasi.php" class="learn-isi"><button>Back</button></a>
        <a href="berandaadmin2.php" class="learn-isi"><button>Home</button></a>
    </div>
    <h3 class="judul">DATA TRANSAKSI</h3>
    <br>
    <div class="tabel">
    <table border="1">   
    <tr>
        <th>Id Transaksi</th>
        <th>Username</th>
        <th>Email</th>
        <th>No.Telepon</th>
        <th>Jumlah Donasi</th>
        <th>No.Rekening</th>
        <th>Tujuan Donasi</th>
        <th colspan="2">Action</th>            
    </tr>
    </div>
    <?php
        include 'koneksi.php';
        $query = "SELECT transaksi.idtransaksi, user.username, user.email, transaksi.notelepon, transaksi.jumlah_donasi,transaksi.no_rekening, donasi.tujuan_donasi
        FROM transaksi
        INNER JOIN user ON transaksi.iduser = user.iduser
        JOIN donasi ON donasi.iddonasi = transaksi.iddonasi;";

        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        while ($data = mysqli_fetch_array($result)) {
        ?>
    <tr>
        <td><?php echo $data['idtransaksi']; ?></td>
        <td><?php echo $data['username']; ?></td>  
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['notelepon']; ?></td>
        <td><?php echo $data['jumlah_donasi']; ?></td>
        <td><?php echo $data['no_rekening']; ?></td>
        <td><?php echo $data['tujuan_donasi']; ?></td>
        <td><a href='editdatatransaksi.php?idtransaksi=<?php echo $data['idtransaksi'];?>'>Edit</a></td>
        <?php  ?>
        <td><a href='deletetransaksi.php?idtransaksi=<?php echo $data['idtransaksi'];?>'>Hapus</a></td>
        <?php }?>
    </tr>

</table>
</html>