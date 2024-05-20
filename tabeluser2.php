<!DOCTYPE html>
<html lang="en">
<head>
<title>Table User</title>
<style>
.judul{
     text-align: center;
     font-weight:600;
     color:black;
}
.tabel th{
    background-color: #D37676;    
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
    width: 110px;
    border-radius: 10px;
    border: none;
    font-size: 30px;
  }
  
  .servicess button:hover {
    background-color: #C68484;
    border: 2px solid white;
    color: #FFB996 ;
  }
        </style>
    </head> 
    <body>
    <div class="servicess">
        <a href="berandaadmin2.php" class="learn-isi"><button>Back</button></a>
        <a href="tabeldonasi.php" class="learn-isi"><button>Lanjut</button></a>
    </div>
    <h3 class="judul">DATA USER</h3>
    <br>
    <div class="tabel">
    <table border="1">   
    <tr>
        <th>id</th>
        <th>username</th>
        <th>email</th>
        <th colspan="2">Action</th>            
    </tr>
    </div>
<?php
include 'koneksi.php';
$result = mysqli_query($mysqli, "SELECT * FROM user_pendonasi") or die (mysqli_error());
while($data = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><a href='editdatauser.php?id=<?php echo $data['id'];?>'>Edit</a></td>
        <?php  ?>
        <td><a href='deleteuser.php?id=<?php echo $data['id'];?>'>Hapus</a></td>
        <?php }?>
    </tr>

</table>
</html>