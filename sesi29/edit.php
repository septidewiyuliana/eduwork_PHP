<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
    include "data.php";
    $id = $_GET['id'];
    $books = mysqli_query ($conn,"SELECT * from buku WHERE id = '$id'");
    
    foreach($books as $book) {
        $judul = $buku_data['judul'];
        $tahun_terbit = $buku_data['tahun'];
        $harga_pinjam = $buku_data['harga_pinjam'];
        $stok = $buku_data['qty_stok'];
    }
      ?>

    <form method="POST" action="proses_edit_buku.php">
        <input type="hidden" name="isbn" value="<?php echo $isbn_buku; ?>">
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>">
        </div>
        <div class="form-group">
            <label for="tahun">Tahun Terbit:</label>
            <input type="number" class="form-control" id="tahun" name="tahun" value="<?php echo $tahun_terbit; ?>">
        </div>
        <div class="form-group">
            <label for="harga_pinjam">Harga Pinjam:</label>
            <input type="number" class="form-control" id="harga_pinjam" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>">
        </div>
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $stok; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</body>
</html>
