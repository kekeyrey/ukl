<?php
        include("koneksi.php");
        if(!isset($_GET['iddonasi'])){
            header('location:tabeldonasi.php');
        }
        $iddonasi = $_GET['iddonasi'];
        $result = mysqli_query($mysqli,"SELECT * FROM donasi WHERE iddonasi=$iddonasi");
        while($user_data = mysqli_fetch_array($result))
        {
            $tujuan_donasi = $user_data['tujuan_donasi'];
            $alamat_donasi = $user_data['alamat_donasi'];
        }
        ?>
    

</body>
    <head>
        <title>Update Data Donasi</title>
        <link rel="stylesheet" href="editdatauser.css">
    </head> 
    <body>
       <header>
        <div class= judul><h3>Update Data Donasi</h3></div>
       </header> 
        <form method="POST" action="koneksieditdonasi.php">
            <table>
                <tr><td>Tujuan Donasi</td>
                    <td><input type="teks" name="tujuan_donasi" value="<?php echo $tujuan_donasi?>"></td>
                </tr>
                <tr><td>Deskripsi</td>
                    <td><input type="teks" name="deskripsi" value="<?php echo $deskripsi?>"></td>
                </tr>
                <tr><td><input type="hidden" name="iddonasi" value=<?php echo $_GET['iddonasi'];?>></td>
                    <td><input type="submit" name="simpan" value="simpan"></td>
                </tr>
            </table>
    </div>