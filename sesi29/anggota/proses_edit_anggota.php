<?php
include_once "../../data.php";

if (!isset($_POST['id_anggota'])) {
    die("Error: ISBN tidak ditemukan.");
}
    // Proses form edit data
    $nama = $_POST["nama"];
    $sex = $_POST["sex"];
    $alamat = $_POST["alamat"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $id_anggota = $_POST["id_anggota"];

    $sql = "UPDATE anggota SET nama='$nama', sex='$sex', alamat='$alamat', username='$username', email='$email', role='$role' WHERE id_anggota='$id_anggota'";

    if ($conn->query($sql) === TRUE) {
        echo "Data buku berhasil diubah.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: ../../anggota.php");
?>


