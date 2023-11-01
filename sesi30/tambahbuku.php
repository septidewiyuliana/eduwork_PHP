<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Tambah Buku</h2>
        <div class="form-container">
            <form action="proses_tambah_buku.php" method="post">
                <table class="table">
                    <tr>
                        <td><label for="isbn">ISBN:</label></td>
                        <td><input type="number" class="form-control" id="isbn" name="isbn" required="" autocomplete="off"></td>
                     </tr>

                    <tr><td><label for="judul">Judul:</label></td>
                        <td><input type="text" class="form-control" id="judul" name="judul" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="tahun_terbit">Tahun Terbit:</label></td>
                        <td><input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="harga_pinjam">Harga Pinjam:</label></td>
                        <td><input type="number" class="form-control" id="harga_pinjam" name="harga_pinjam" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="stok">Stok:</label></td>
                        <td><input type="number" class="form-control" id="stok" name="stok" required="" autocomplete="off"></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">Tambah Buku</button>
            </form>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
