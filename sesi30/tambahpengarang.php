<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Pengarang</title>
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
        <h2 class="text-center">Tambah Pengarang</h2>
        <div class="form-container">
            <form action="proses_tambah_pengarang.php" method="post">
                <table class="table">
                    <tr>
                        <td><label for="nama_pengarang">Nama Pengarang:</label></td>
                        <td><input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="email" class="form-control" id="email" name="email" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="telp">Telepon:</label></td>
                        <td><input type="number" class="form-control" id="telp" name="telp" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat:</label></td>
                        <td><input type="text" class="form-control" id="alamat" name ="alamat" required=" "autocomplete="off"></td>

                    </tr>
                        <td>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
