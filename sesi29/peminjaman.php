<?php
include "data.php";
$query = mysqli_query($conn, "SELECT * FROM peminjaman");
?>

<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css">
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #80B4FF;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            margin-right: 5px;
        }
        .center-title {
            background-color: #007BFF;
            text-align: center;
            padding: 20px 0;
            text-decoration-color: aliceblue;
        }
        .white-text {
            color: white;
        }
        .center-buttons {
            text-align: center;
        }
    </style>
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
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                 </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($query) > 0) {
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo date ("d F Y",strtotime ($data["tgl_pinjam"])); ?></td>
                            <td><?php echo date ("d F Y",strtotime($data["tgl_kembali"])); ?></td>
                         </tr>
                        <?php $no++;
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="left-buttons">
            <a href= "tambahpeminjaman.php">Tambah Peminjaman</a> 
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
