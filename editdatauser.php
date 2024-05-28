<?php
        include("koneksi.php");
        if(!isset($_GET['id'])){
            header('location:tabeluser2.php');
        }
        $id = $_GET['id'];
        $result = mysqli_query($mysqli,"SELECT * FROM user_pendonasi WHERE id=$id");
        while($user_data = mysqli_fetch_array($result))
        {
            $username = $user_data['username'];
            $email = $user_data['email'];
            $role = $user_data['role'];
        }
        ?>
    

</body>
    <head>
        <title>Update Data</title>
        <link rel="stylesheet" href="editdatauser.css">
    </head> 
    <body>
       <header>
        <div class= judul><h3>Update Data User</h3></div>
       </header> 
        <form method="POST" action="koneksiedituser.php">
            <table>
                <tr><td>username</td>
                    <td><input type="teks" name="username" value="<?php echo $username?>"></td>
                </tr>
                <tr><td>email</td>
                    <td><input type="teks" name="email" value="<?php echo $email?>"></td>
                </tr>
                <tr><td>role</td>
                    <td><select name="role" id="role" required>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        </select>
                    </td>
                </tr>
                <tr><td><input type="hidden" name="id" value=<?php echo $_GET['iduser'];?>></td>
                    <td><input type="submit" name="simpan" value="simpan"></td>
                </tr>
            </table>
    </div>