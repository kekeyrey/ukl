<!DOCTYPE html>
<html lang="en">
    <head>
        <title>View Table</title>
    </head> 
    <body>
     <table border="1" class="table">
    <tr>
            <th>id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
    </tr>

<?php
// select tabel user dari database
include 'function.php';
$result = mysqli_query($mysqli, "SELECT * FROM user") or die (mysqli_error());

while($data = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <?php } ?>
    </tr>
</table>
</html>