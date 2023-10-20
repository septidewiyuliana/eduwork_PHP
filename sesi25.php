Nomor 1 <br>
<?php
$bilangan = 5;

if ($bilangan % 2 == 0) {
    echo "$bilangan adalah bilangan genap";
} else {
    echo "$bilangan adalah bilangan ganjil";
}
?> 
<br> 
<br>
Nomor 2 <br>
<?php
$tahun = date("Y"); 

if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
    echo "Tahun $tahun adalah tahun kabisat";
} else {
    echo "Tahun $tahun bukan tahun kabisat";
}
?>
<br>
<br>

Nomor 3 <br>
<?php
$nilai = 85; 
$grade = ""; 

if ($nilai >= 90 && $nilai <= 100) {
    $grade = "A";
} else if ($nilai >= 80 && $nilai <= 89) {
    $grade = "B";
} else if ($nilai >= 70 && $nilai <= 79) {
    $grade = "C";
} else if ($nilai >= 60 && $nilai <= 69) {
    $grade = "D";
} else {
    $grade = "E"; // Kategori di luar rentang A, B, C, D
}

echo "Nilai kamu $nilai, termasuk dalam grade $grade";
?>

