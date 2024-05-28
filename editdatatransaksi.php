<?php
        include("koneksi.php");
        if(!isset($_GET['idtransaksi'])){
            header('location:tabeltransaksi.php');
        }
        $idtransaksi = $_GET['idtransaksi'];
        $result = mysqli_query($mysqli,"SELECT * FROM transaksi WHERE idtransaksi=$idtransaksi");
        while($user_data = mysqli_fetch_array($result))
        {
            $notelepon = $user_data['notelepon'];
            $jumlah_donasi = $user_data['jumlah_donasi'];
            $no_rekening = $user_data['no_rekening'];
        }
        ?>
    

</body>
    <head>
        <title>Update Data transaksi</title>
        <link rel="stylesheet" href="editdatauser.css">
    </head> 
    <body>
       <header>
        <div class= judul><h3>Update Data Transaksi</h3></div>
       </header> 
        <form method="POST" action="koneksiedittransaksi.php">
            <table>
                <tr><td>No Telepon</td>
                    <td><input type="teks" name="notelepon" value="<?php echo $notelepon?>"></td>
                </tr>
                <tr><td>Jumlah Donasi</td>
                    <td><input type="teks" name="jumlah_donasi" value="<?php echo $jumlah_donasi?>"></td>
                </tr>
                <tr><td>No Rekening</td>
                    <td><input type="teks" name="no_rekening" value="<?php echo $no_rekening?>"></td>
                </tr>
                <tr><td><input type="hidden" name="idtransaksi" value=<?php echo $_GET['idtransaksi'];?>></td>
                    <td><input type="submit" name="simpan" value="simpan"></td>
                </tr>
            </table>
    </div>