<?php
include_once "data.php";
$id= $_GET ['id'] ;

mysqli_query ($conn, "DELETE FROM buku WHERE id = '$id'") or die(mysqli_error($conn));
header("Location: indexx.php");
?> 