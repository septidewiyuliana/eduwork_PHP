<?php
$nama_peng = $_POST['nama_pengarang'];
$email = $_POST['email'];
$telepon_pengarang = $_POST['telp'];
$alamat = $_POST['alamat'];


include_once "data.php";

mysqli_query($conn, "INSERT INTO `pengarang` (`nama_pengarang`, `email`, `telp`, `alamat`) 
VALUES ('$nama_peng', '$email', '$telepon_pengarang', '$alamat')");

header("Location: pengarang.php");
?>
