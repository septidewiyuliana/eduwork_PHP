<?php
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$username_ = $_POST['username'];
$email = $_POST['email'];
$role = $_POST['role'];

include_once "../data.php";

mysqli_query($conn, "INSERT INTO `anggota` (`nama`, `sex`, `alamat`, `username`, `email`, `role`) 
VALUES ('$nama', '$jenis_kelamin', '$alamat', '$username_', '$email', '$role')");

header("Location: ../anggota.php");
?>
