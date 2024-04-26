<?php
        include("koneksi.php");
        if(!isset($_GET['id'])){
            header('location:view tabel.php');
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
    </head> 
    <body>
       <header>
        <h3>Formulir Update Data</h3>
       </header> 
       <form method="POST" action="koneksi_edit.php">
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
                <tr><td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="simpan" value="simpan"></td>
                </tr>
            </table>
       