<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "perpus";
$conn= new mysqli($hostname,$username,$password,$db_name);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}