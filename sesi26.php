 Nomor 1 <br>
 <?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Angka $i adalah bilangan genap<br>";
    } else {
        echo "Angka $i adalah bilangan ganjil<br>";
    }
}
?> <br>
<br>
Nomor 2 <br>
<?php
for ($tahun = 2000; $tahun <= 2023; $tahun++) {
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
        echo "$tahun adalah tahun kabisat<br>";
    } else {
        echo "$tahun bukan tahun kabisat<br>";
    }
}
?><br>
Nomor 3 <br>
<?php
for ($i = 9; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
?>
