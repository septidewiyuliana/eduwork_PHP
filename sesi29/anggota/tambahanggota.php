<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Anggota</title>
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
        <h2 class="text-center">Tambah Anggota</h2>
        <div class="form-container">
            <form action="proses_tambah_anggota.php" method="post">
                <table class="table">
                    <tr>
                        <td><label for="nama">Nama:</label></td>
                        <td><input type="text" class="form-control" id="nama" name="nama" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="sex">Jenis Kelamin:</label></td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioL" value="L" required>
                                <label class="form-check-label" for="flexRadioL">L</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioP" value="P" required>
                                <label class="form-check-label" for="flexRadioP">P</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat:</label></td>
                        <td><input type="text" class="form-control" id="alamat" name ="alamat" required=" s"autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td><input type="text" class="form-control" id="username" name="username" required=" "autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="email" class="form-control" id="email" name="email" required="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><label for="role">Role:</label></td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="flexRadioL" value="ADMIN" required>
                                <label class="form-check-label" for="flexRadioL">ADMIN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="flexRadioP" value="USER" required>
                                <label class="form-check-label" for="flexRadioP">USER</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Tambah Anggota</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
