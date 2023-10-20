Nomor 1 <br>
<?php
$n = 9; // Jumlah baris 
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
?>
<br>

Nomor 2 <br>
<!DOCTYPE html>
<html>
<head>
    <title>Tabel Siswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }
        .col-no {
            background-color: #32b4fa;
            color: black;
            text-align: center;
        }

        .col-nama {
            background-color: #32b4fa;
            color: black;
            text-align: center;
        }

        .col-kelas {
            background-color: #32b4fa;
            color: black;
            text-align: center;
        }

        /* Baris dengan nomor ganjil */
        tbody tr:nth-child(odd) {
            background-color: #c8cbcc; 

        /* Baris dengan nomor genap */
        tbody tr:nth-child(even) {
            background-color: white;
        }
    </style>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th class="col-no">No</th>
                <th class="col-nama">Nama</th>
                <th class="col-kelas">Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            for ($i = 10; $i >= 1; $i--) {
                $nama = "Nama ke " . $no;
                $kelas = "Kelas " . $i;
                echo "<tr>
                        <td>$no</td>
                        <td>$nama</td>
                        <td>$kelas</td>
                      </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
