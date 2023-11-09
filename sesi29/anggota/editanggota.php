<!DOCTYPE html>
<html>

<head>
    <title>Edit Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    include "../../data.php";
    $id_anggota = $_GET['id_anggota'];
    $members = mysqli_query($conn, "SELECT * from anggota WHERE id_anggota = '$id_anggota'");

    foreach ($members as $member) {
        $nama = $member["nama"];
        $sex = $member["sex"];
        $alamat = $member["alamat"];
        $username = $member["username"];
        $email = $member["email"];
        $role = $member["role"];
    }
    ?>
    <form method="POST" action="proses_edit_anggota.php">
        <input type="hidden" name="id_anggota" value="<?php echo $id_anggota; ?>">
     <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
    </div>
    <div class="form-group">
        <label for="sex">Jenis Kelamin:</label>
        <input type="text" class="form-control" id="sex" name="sex" value="<?php echo $sex; ?>">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>">
    </div>
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
        <label for="role">Role:</label>
        <input type="text" class="form-control" id="role" name="role" value="<?php echo $role; ?>">
    </div>
    <button type="submit" class="btn btn-primary"  name="update">Simpan Perubahan</button>
</form>

</body>

</html>