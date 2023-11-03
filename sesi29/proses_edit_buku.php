<?php
include_once "data.php";
mysqli_close($conn);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses form edit data
    $isbn = $_POST["isbn"];
    $judul = $_POST["judul"];
    $tahun = $_POST["tahun"];
    $harga_pinjam = $_POST["harga_pinjam"];
    $qty_stok = $_POST["qty_stok"];

    $sql = "UPDATE buku SET isbn='$isbn', judul='$judul', tahun='$tahun', harga_pinjam='$harga_pinjam', qty_stok='$qty_stok' WHERE isbn=$isbn";

    if ($conn->query($sql) === TRUE) {
        echo "Data buku berhasil diubah.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET["id"];
    $sql = "SELECT * FROM buku WHERE id=$id";
    $result = $conn->query($sql);
}
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $isbn = $row["isbn"];
        $judul = $row["judul"];
        $tahun = $row["tahun"];
        $harga_pinjam = $row["harga_pinjam"];
        $qty_stok = $row["qty_stok"];
    }
?> 