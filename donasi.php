<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #AFD198;
        }

        .container {
            max-width: 300px;
            margin: 60px auto;
            padding: 30px;
            background-color: #BFF6C3;
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
        <h2>DONASI</h2>
        <form action="koneksidonasi.php" method="POST">
            <div class="form-group">
                <label for="tujuan_donasi">Tujuan Donasi:</label>
                <input type="text" id="tujuan_donasi" name="tujuan_donasi" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Donasi:</label>
                <input type="text" id="deskripsi" name="deskripsi" required>
            </div>
            <div class="form-group">
				<label>Foto :</label>
				<input type="text" name="foto" required="required">
			</div>	
            <button type="submit" name="save">Kirim</button>
        </form>
    </div>
</body>
</html>
