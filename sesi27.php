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
    <title>Sesi 27</title>
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
<br>
Nomor 3 (ARRAY)
<br>
<?php
$orang1 = array(
    'Nama' => 'Pelita',
    'Umur' => 23,
    'Kelas' => 'Laravel'
);

$orang2 = array(
    'Nama' => 'Najmina',
    'Umur' => 20,
    'Kelas' => 'Node JS'
);

$orang3 = array(
    'Nama' => 'Fahmi',
    'Umur' => 26,
    'Kelas' => 'Digital Marketing'
);

$orang4 = array(
    'Nama' => 'Anita',
    'Umur' => 21,
    'Kelas' => 'UI/UX Designer'
);

$orang5 = array(
    'Nama' => 'Nasa',
    'Umur' => 23,
    'Kelas' => 'Graphic Designer'
);

$daftar_orang = array($orang1, $orang2, $orang3, $orang4, $orang5);

foreach ($daftar_orang as $orang) {
    echo "Nama: " . $orang['Nama'] . ", Umur: " . $orang['Umur'] . " tahun, Kelas: " . $orang['Kelas'] . "<br>";
}
?>
<br>
<?php
$names = ["Pelita", "Najmina", "Fahmi", "Nasa", "Rahma"];

foreach ($names as $name) {
    echo "Nama: $name<br>";
}
?>

<br>
Nomor 4 (OPERATOR)
<br>
Menghitung luas bangun datar <br>

<?php
// Menghitung luas dan menampilkan informasi persegi
$sisi_persegi = 5;
$luas_persegi = $sisi_persegi * $sisi_persegi;
echo "a. Persegi(Panjang Sisi: $sisi_persegi) <br> Luas persegi = $luas_persegi<br>";

// Menghitung luas dan menampilkan informasi persegi panjang
$panjang = 7;
$lebar = 4;
$luas_persegi_panjang = $panjang * $lebar;
echo "b. Persegi Panjang (Panjang: $panjang, Lebar: $lebar) <br> Luas persegi panjang = $luas_persegi_panjang<br>";

// Menghitung luas segitiga
$alas_segitiga = 6;
$tinggi_segitiga = 8;
$luas_segitiga = 0.5 * $alas_segitiga * $tinggi_segitiga;
echo "c. Segitiga (Alas: $alas_segitiga, Tinggi: $tinggi_segitiga) <br> Luas segitiga = $luas_segitiga<br>";

// Menghitung luas lingkaran
$jari_jari = 3;
$luas_lingkaran = 3.14 * $jari_jari * $jari_jari;
echo "d. Lingkaran (Jari-Jari: $jari_jari) <br> Luas Lingkaran = $luas_lingkaran<br>";

// Menghitung luas trapesium
$alas_atas = 5;
$alas_bawah = 7;
$tinggi_trapesium = 4;
$luas_trapesium = 0.5 * ($alas_atas + $alas_bawah) * $tinggi_trapesium;
echo "e. Trapesium (Alas Atas: $alas_atas, Alas Bawah: $alas_bawah, Tinggi: $tinggi_trapesium) <br> Luas= $luas_trapesium<br>";
?>
<br>

Menghitung volume 3 bangun ruang
<br>
<?php
// Menghitung volume dan menampilkan informasi balok
$panjang_balok = 6;
$lebar_balok = 4;
$tinggi_balok = 5;
$volume_balok = $panjang_balok * $lebar_balok * $tinggi_balok;
echo "Balok";
echo "(Panjang: $panjang_balok, Lebar:$lebar_balok, Tinggi: $tinggi_balok) - Volume= $volume_balok<br>"; 

// Menghitung volume dan menampilkan informasi tabung
$jari_jari_tabung = 3;
$tinggi_tabung = 8;
$volume_tabung = 3.14 * $jari_jari_tabung * $jari_jari_tabung * $tinggi_tabung;
echo "Tabung (Jari-Jari: $jari_jari_tabung, Tinggi: $tinggi_tabung) - Volume= $volume_tabung<br>";

// Menghitung volume dan menampilkan informasi kerucut
$jari_jari_kerucut = 5;
$tinggi_kerucut = 15;
$volume_kerucut = (1/3) * 3.14 * $jari_jari_kerucut * $jari_jari_kerucut * $tinggi_kerucut;
echo "Kerucut (Jari-Jari: $jari_jari_kerucut, Tinggi: $tinggi_kerucut) - Volume= $volume_kerucut<br>";
?> 
<br>

Nomor 5 (IF ELSE)
<br>
<?php
// Fungsi untuk menghitung BMI
function hitungBMI($berat, $tinggi) {
    return $berat / ($tinggi * $tinggi);
}

// Data pengguna
$nama = "Septi"; // Nama 
$berat = 42; // Berat badan dalam kilogram
$tinggi = 1.55 ; // Tinggi dalam meter

// Menghitung BMI
$bmi = hitungBMI($berat, $tinggi);

// Menentukan kategori BMI
if ($bmi < 18.5) {
    $kategori = "kurus";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $kategori = "sedang";
} else {
    $kategori = "gemuk";
}

// Menampilkan hasil
echo "Halo, $nama, nilai BMI Anda adalah " . number_format($bmi, 2) . ", Anda termasuk dalam kategori $kategori.";
?>
<br>
<br>
Nomor 6 (SWITCH CASE)
<br>
<?php
// Data pengguna
$nama = "Septi"; // nama 
$nilai = 85; // nilai 

// Menentukan kategori berdasarkan nilai
$kategori = "";
if ($nilai >= 90 && $nilai <= 100) {
    $kategori = "A";
} elseif ($nilai >= 80 && $nilai < 90) {
    $kategori = "B";
} elseif ($nilai >= 70 && $nilai < 80) {
    $kategori = "C";
} else {
    $kategori = "D";
}

// Menampilkan hasil
echo "Halo, $nama, nilai Anda adalah $nilai, dengan kategori nilai $kategori.";
?>
<br>
<br>
Nomor 7 (TUGAS)
<br>
<?php

for ($i = 1; $i <= 10; $i++) {
    $hasil = $i * 1;
    echo "1x$i = $hasil<br>";
}
?>

<br>

<?php
$i = 1;
while ($i <= 10) {
    $hasil = $i * 1;
    echo "1x$i = $hasil<br>";
    $i++;
}
?>
<br>

<?php
for ($i = 10; $i >= 1; $i--) { // Loop baris dari 10 hingga 1
    for ($j = 1; $j <= $i; $j++) { // Loop kolom (bintang) sesuai dengan nomor baris
        echo "*"; // Cetak satu bintang
    }
    echo "<br>"; // Pindah ke baris berikutnya setelah mencetak satu baris bintang
}
?>

<br>
<?php
$n = 9; // Jumlah baris 
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j <= $i; $j++) { // Loop untuk mencetak angka dari 0 hingga $i
        echo $j; // Cetak angka
    }
    echo "<br>"; // Pindah ke baris berikutnya setelah mencetak angka pada baris saat ini
}
?>
