<?php
include "data.php";
$query=mysqli_query($conn, "SELECT * FROM anggota");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>ID anggota?</th>
            <th>Username</th>
            <th>Telpon</th>
            <th>Email</th>
        </tr>
<?php if(mysqli_num_rows($query)>0){ ?>
<?php
$no= 1;
while($data=mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo $no ?></td>
    <td><?php echo $data["id_anggota"]; ?></td>
    <td><?php echo $data["username"]; ?></td>
    <td><?php echo $data["telp"]; ?></td>
    <td><?php echo $data["email"]; ?></td>
    <td>
<a href="#">Delete</a> 
<a href="#">Update</a>
</td>
</tr>

<?php $no++; } ?>
<?php } ?>
</table>
</form>