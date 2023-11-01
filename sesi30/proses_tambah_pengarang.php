<?php
$nama_pengarang = $_POST['nama_pengarang'];
$email = $_POST['email'];
$telepon = $_POST['telp'];
$alamat = $_POST['alamat'];


include_once "data.php";

mysqli_query($conn, "INSERT INTO `pengarang` (`nama_pengarang`, `email`, `telp`, `alamat`) 
VALUES ('$nama_pengarang', '$email', '$telepon', '$alamat')");

header("Location: pengarang.php");
?>
