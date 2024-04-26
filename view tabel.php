<!DOCTYPE html>
<html lang="en">
    <head>
        <title>View Table</title>
    </head> 
    <link rel="stylesheet" href="view.css">
    <body>
    <h3 class="judul">DATA USER</h3>
    <br>
    <div class="tabel">
    <table border="1">   
    <tr>
        <th>id</th>
        <th>Username</th>
        <th>Email</th>
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
        <td><span><a href='edit_data.php?id=<?php echo $data['id'];?>'>Edit</span></td>
        <?php } ?>
        <td><span><a href='delete_user.php?id=<?php echo $data['id'];?>'>Hapus</span></td>
        <?php ?>
    </tr>
</table>
</html>