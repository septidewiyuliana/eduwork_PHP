<?php
include_once "../../data.php";
$id_anggota= $_GET ['id_anggota'] ;

mysqli_query ($conn, "DELETE FROM anggota WHERE id_anggota = '$id_anggota'") or die(mysqli_error($conn));
header("Location:anggota.php");
?> 