<?php
include "data.php";
$query = mysqli_query($conn, "SELECT * FROM anggota");
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
 
</head>
<body>
    <div class="container my-5">
        <div class="center-title">
            <h1 class="white-text">Perpustakaan Eduwork</h1>
        </div>
        <div class="center-buttons my-3">
            <a href= "index.php">Buku</a> |
            <a href= "anggota.php">Anggota</a> |
            <a href= "peminjaman.php">Peminjaman</a> |
        </div>
        <table id= "MyTableAnggota" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $data_anggota = mysqli_query($conn, "SELECT * FROM anggota");
                    $i = 1 ;
                        while ($ambil_data_anggota = mysqli_fetch_array($data_anggota)) {
                    
                        $nama = $ambil_data_anggota["nama"];
                        $sex = $ambil_data_anggota["sex"];
                        $alamat = $ambil_data_anggota["alamat"];
                        $username = $ambil_data_anggota["username"];
                        $email = $ambil_data_anggota["email"];
                        $role = $ambil_data_anggota["role"];

                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $nama ?></td>
                            <td><?= $sex ?></td>
                            <td><?= $alamat ?></td>
                            <td><?= $username ?></td>
                            <td><?= $email ?></td>
                            <td><?= $role ?></td>
                            <td>
                            <a class="btn btn-danger"  href="anggota/deleteanggota.php?id_anggota=<?php echo $ambil_data_anggota['id_anggota']; ?>" onclick="return confirm ('Hapus data ini?')">Delete</a>
                            <a class="btn btn-warning" href="anggota/editanggota.php?id_anggota=<?php echo $ambil_data_anggota['id_anggota']; ?>">Edit</a>
                            
                        </tr>
                        <?php 
                    }
                         ?>
            </tbody>
        </table>
        <div class="left-buttons">
            <a href= "anggota/tambahanggota.php">Tambah Anggota</a> 
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js">
                $(document).ready(function (){
                    $ ('#myTableBuku').DataTable();
                });
    </script>
   </body>
</html>
