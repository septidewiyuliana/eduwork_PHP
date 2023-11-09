<?php
$isbn = $_POST ['isbn'];
$judul =$_POST ['judul'];
$tahun =$_POST ['tahun_terbit'];
$harga_pinjam =$_POST ['harga_pinjam'];
$stok =$_POST ['stok'];

include_once "../data.php";

mysqli_query($conn, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `harga_pinjam`, `qty_stok`) 
VALUES ('$isbn', '$judul', '$tahun', '$harga_pinjam', '$stok')");

header("Location:../index.php");
?>