<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
</head>
<?php
include_once "data.php";
$isbn = $_GET ['isbn'];

$buku = mysqli_query($conn,"SELECT * FROM buku WHERE isbn='$isbn'");

while ($buku_data = mysqli_fetch_array($buku)) {
$judul =$GET ['judul'];
$tahun =$GET ['tahun_terbit'];
$harga_pinjam =$GET ['harga_pinjam'];
$stok =$GET ['stok'];
}
?>
