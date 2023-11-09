<?php
include_once "../data.php";
if (isset($_POST['update'])) {
    if (!isset($_POST['isbn'])) {
        die("Error: ISBN tidak ditemukan.");
    }
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];
    $harga_pinjam = $_POST['harga_pinjam'];

    $result = mysqli_query($conn, "UPDATE buku SET judul='$judul',tahun='$tahun',qty_stok='$stok',harga_pinjam='$harga_pinjam' WHERE isbn='$isbn'");
    header("Location:index.php");
}
?>
