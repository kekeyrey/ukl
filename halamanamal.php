<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan Donasi</title>
    <style>
    *{
        font-family:arial,sans-serif;
    }
    body{
        background-color:#E3E1D9;
    }
    .servicess {
    text-align: center ;
    }
    .servicess button {
    margin-top: 50px;
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
    .judul{
        text-align:center;
        color:black;
        margin-top:20px;
        align-content:center;
     }
     .box{
        width:400px;
        height:600px;
        background-color:#A1DD70;
        text-align: center;
        padding: 20px 20px;
        margin:60px 20px 20px 190px;
        border-radius:5px;
        float:left;
        font-size:20px;
     }
     .box:hover{
        background-color: #ACE1AF;
        color: black;
     }
     .btn{
        display: block;
        width: 95%;
        padding: 10px;
        background-color: #4CAF50;
        color: #1A4D2E;
        border: none;
        border-radius: 3px;
        cursor: pointer;
     }
     .btn:hover{
        background-color: #45a049;
     }
    </style>
</head>
<body>
<div class="servicess">
        <a href="berandauser.php" class="learn-isi"><button>Back</button></a>
    </div>
    <div class=judul>
        <h1>DONASI</h1>
    </div>
            <?php
            // select tabel user dari database
            include 'koneksi.php';
            $result = mysqli_query($mysqli, "SELECT * FROM donasi") or die (mysqli_error());

            while($data = mysqli_fetch_array($result)){
                ?>
                    <div class="box">
                        <img src="<?php echo $data['foto'] ?>">
                        <h3><?php echo $data['tujuan_donasi']; ?></h3>
                        <p><?php echo $data['deskripsi']; ?></p>
                        <div class="button"></div>
                        <a href="transaksi.php" class="btn">Donasi Sekarang</a>
                    </div>
                <?php } ?>
        </div>
    </div>
</body>
</html>