<?php
$angka = array("satu", "dua", "tiga", "empat", "lima");

for ($i = 4; $i >= 0; $i--) {
    echo $angka[$i] .  "<br>\n"; 
}
?>
<br>

<?php
$buah = array("apel", "nanas", "mangga", "jeruk");
$jumlah_buah = count($buah);

echo "Terdapat " . $jumlah_buah . " buah";
?>

<br>
<br>
<?php
$angka = array(7, 3, 4, 9);
$total = array_sum($angka);

echo "Totalnya adalah " . $total;
?>
<br>
<br>
<?php
for ($i = 1; $i <= 10; $i++) {
    $hasil = 1 * $i;
    echo "1x" . $i . " = " . $hasil . "<br>\n";
}
?>
