<!DOCTYPE html>
<html lang="en">
<head>
<title>Table Donasi</title>
<style>
.judul{
     text-align: center;
     font-weight:600;
     color:black;
}
.tabel th{
    background-color: aqua;    
    height:40px;
    padding:10px;
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
    width: 120px;
    border-radius: 10px;
    border: none;
    font-size: 30px;
  }
  
  .servicess button:hover {
    background-color: #BFF6C3;
    border: 2px solid white;
    color: #2C7865 ;
  }

        </style>
    </head> 
    <body>
    <div class="servicess">
        <a href="tabeluser2.php" class="learn-isi"><button>Back</button></a>
        <a href="berandaadmin2.php" class="learn-isi"><button>Home</button></a>
        <a href="tabeltransaksi.php" class="learn-isi"><button>Lanjut</button></a>
    </div>
    <h3 class="judul">DATA DONASI</h3>
    <br>
    <div class="tabel">
    <table border="1">   
    <tr>
        <th>Id Donasi</th>
        <th>Tujuan Donasi</th>
        <th>Deskripsi Donasi</th>
        <th colspan="2">Action</th>            
    </tr>
    </div>
<?php
include 'koneksi.php';
$result = mysqli_query($mysqli, "SELECT * FROM donasi") or die (mysqli_error());
while($data = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $data['iddonasi']; ?></td>
        <td><?php echo $data['tujuan_donasi']; ?></td>
        <td><?php echo $data['deskripsi']; ?></td>
        <td><a href='editdatadonasi.php?iddonasi=<?php echo $data['iddonasi'];?>'>Edit</a></td>
        <?php  ?>
        <td><a href='deletedonasi.php?iddonasi=<?php echo $data['iddonasi'];?>'>Hapus</a></td>
        <?php }?>
    </tr>

</table>
</html>