<?php
$data = file_get_contents("data.json");
$students = json_decode($data, true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sesi 28</title>
    <style>
        .judul-tabel {
            background-color: #ffbd4a;
            text-align: left;
            font-size: 20px;
            padding: 25px;
        }

        .tabel-siswa {
            margin-top: 20px;
            margin-left : 10%;
            width: 70%;
            border-collapse: collapse;
        }

        .tabel-siswa th, .tabel-siswa td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center; /* Teks di tengah kolom */
        }
    </style>
</head>
<body>
<div class="judul-tabel">Daftar Nilai</div>

<table class="tabel-siswa">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Kategori Nilai</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;

        foreach ($students as $student) {
            $tanggal_lahir = date_create($student["tanggal_lahir"]);
            $umur = date_diff($tanggal_lahir, date_create('today'))->y;

            $nilai = $student["nilai"];
            if ($nilai >= 90 && $nilai <= 100) {
                $kategori = "A";
            } elseif ($nilai >= 80 && $nilai < 90) {
                $kategori = "B";
            } elseif ($nilai >= 70 && $nilai < 80) {
                $kategori = "C";
            } else {
                $kategori = "D";
            }

             $background_color = ($no % 2 == 0) ? 'background-color: white;' : 'background-color: #f2f2f2;';

            echo "<tr style=\"$background_color\">";
            echo "<td>$no</td>";
            echo "<td>" . $student["nama"] . "</td>";
            echo "<td>" . date_format($tanggal_lahir, 'd-m-Y') . "</td>";
            echo "<td>$umur tahun</td>";
            echo "<td>" . $student["alamat"] . "</td>";
            echo "<td>" . $student["kelas"] . "</td>";
            echo "<td>$nilai</td>";
            echo "<td>$kategori</td>";
            echo "</tr>";

            $no++;
        }
        ?>
    </tbody>
</table>
</body>
</html>
