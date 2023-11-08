<?php
include "data.php";
$query = mysqli_query($conn, "SELECT * FROM buku");
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
        .left-buttons {
            text-align: left;
            margin-left: 10% ;
            padding: 20px 0;
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
            <a href= "pengarang.php">Pengarang</a> |
            <a href= "peminjaman.php">Peminjaman</a> |
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ISBN</th>
                    <th>Judul</th>
                    <th>Tahun Terbit</th>
                    <th>Harga Pinjam </th>
                    <th>Stok </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data_buku  = mysqli_query($conn, "SELECT * FROM buku");
                    $i = 1;
                    while ($ambil_data = mysqli_fetch_array($data_buku)) {
                        $isbn = $ambil_data["isbn"];
                        $judul = $ambil_data["judul"];
                        $tahun = $ambil_data["tahun"];
                        $harga_pinjam = $ambil_data["harga_pinjam"];
                        $stok = $ambil_data["qty_stok"];

                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $isbn ?></td>
                            <td><?= $judul ?></td>
                            <td><?= $tahun ?></td>
                            <td><?= $harga_pinjam ?></td>
                            <td><?= $stok ?></td>
                            <td>
                              <a class="btn btn-danger" href="delete.php?isbn=<?php echo $ambil_data['isbn']; ?>">Delete</a>
                               <a class="btn btn-warning" href="edit.php?isbn=<?php echo $ambil_data['isbn']; ?>">Edit</a>
                            </td>
                        </tr>
                        <?php 
                    }
                ?>
            </tbody>
        </table>
        <div class="left-buttons">
            <a href= "tambahbuku.php">Tambah Buku</a> 
        </div>

    </div>

    <!-- Tambahkan skrip jQuery dan JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
