<?php
include_once "data.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses form edit data
    $isbn = $_POST["isbn"];
    $judul = $_POST["judul"];
    $tahun = $_POST["tahun"];
    $harga_pinjam = $_POST["harga_pinjam"];
    $qty_stok = $_POST["qty_stok"];

    $sql = "UPDATE buku SET judul='$judul', tahun='$tahun', harga_pinjam='$harga_pinjam', qty_stok='$qty_stok' WHERE isbn='$isbn'";

    if ($conn->query($sql) === TRUE) {
        echo "Data buku berhasil diubah.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: index.php");
} else {
    $isbn = $_GET["isbn"]; // Ubah $id menjadi $isbn
    $sql = "SELECT * FROM buku WHERE isbn='$isbn'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $isbn = $row["isbn"];
        $judul = $row["judul"];
        $tahun = $row["tahun"];
        $harga_pinjam = $row["harga_pinjam"];
        $qty_stok = $row["qty_stok"];
    }
}

$nama = $_POST["nama"];
    $sex = $_POST["sex"];
    $alamat = $_POST["alamat"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $id_anggota = $_POST["id_anggota"];

    $sql = "UPDATE anggota SET nama='$nama', sex='$sex', alamat='$alamat', username='$username', email='$email', role='$role' WHERE id_anggota='$id_anggota'";
