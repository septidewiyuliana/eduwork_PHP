<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Nomor 1</th>
    </tr>
    <tr>
        <td>
            <?php
            $angka = array("satu", "dua", "tiga", "empat", "lima");

            for ($i = 4; $i >= 0; $i--) {
                echo $angka[$i] . "<br>\n";
            }
            ?>
        </td>
    </tr>
</table>

<table>
    <tr>
        <th>Nomor 2</th>
    </tr>
    <tr>
        <td>
            <?php
            $buah = array("apel", "nanas", "mangga", "jeruk");
            $jumlah_buah = count($buah);

            echo "Terdapat " . $jumlah_buah . " buah";
            ?>
        </td>
    </tr>
</table>

<table>
    <tr>
        <th>Nomor 3</th>
    </tr>
    <tr>
        <td>
            <?php
            $angka = array(7, 3, 4, 9);
            $total = array_sum($angka);

            echo "Totalnya adalah " . $total;
            ?>
        </td>
    </tr>
</table>

<table>
    <tr>
        <th>Nomor 4</th>
    </tr>
    <tr>
        <td>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                $hasil = 1 * $i;
                echo "1x" . $i . " = " . $hasil . "<br>\n";
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>
