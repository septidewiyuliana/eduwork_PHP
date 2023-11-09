<?php
include_once "../data.php";
$isbn = $_GET['isbn'];

mysqli_query($conn, "DELETE FROM buku WHERE isbn = '$isbn'") or die(mysqli_error($conn));
header("Location: ../index.php");
