<?php
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];


include_once "../data.php";

mysqli_query($conn, "INSERT INTO `peminjaman` (`tgl_pinjam`, `tgl_kembali`) 
VALUES ('$tgl_pinjam', '$tgl_kembali')");

header("Location: ../peminjaman.php");
?>
