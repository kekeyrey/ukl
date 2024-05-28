<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #DEAC80;
        }

        .container {
            max-width: 300px;
            margin: 60px auto;
            padding: 30px;
            background-color: #FBF3D5;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px; 
            font-size: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="tel"],
        input[type="number"],
        input[type="text"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>TRANSAKSI</h2>
        <form action="koneksitransaksi.php" method="POST">
            <div class="form-group">
                <label for="notelepon">No. Telepon:</label>
                <input type="tel" id="notelepon" name="notelepon" required>
            </div>
            <div class="form-group">
                <label for="jumlah_donasi">Jumlah Donasi:</label>
                <input type="text" id="jumlah_donasi" name="jumlah_donasi" required>
            </div>
            <div class="form-group">
                <label for="no_rekening">No. Rekening:</label>
                <input type="text" id="no_rekening" name="no_rekening" required>
            </div>
            <div class="form-group">
                <label for="tujuan_donasi">Tujuan Donasi:</label>
                <select id="tujuan_donasi" name="iddonasi" required>
                    <?php
                    include 'koneksi.php';
                    // Jalankan query untuk mengambil semua data dari tabel donasi
                    $sql = "SELECT iddonasi, tujuan_donasi FROM donasi";
                    $result = $mysqli->query($sql);

                    // Loop melalui setiap baris hasil query
                    while ($data = mysqli_fetch_array($result)) {
                        // Cetak elemen option untuk setiap baris
                        echo '<option value="' . $data['iddonasi'] . '">' . $data['tujuan_donasi'] . '</option>';
                    }

                    // Tutup koneksi database
                    $mysqli->close();
                    ?>
                </select>
            </div>
            <button type="submit" name="Submit">Kirim</button>
        </form>
    </div>
</body>
</html>
