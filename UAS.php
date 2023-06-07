<?php
$kalorisemakan = 2500;
$makananharian = array(3, 2, 2, 3, 3, 2, 1);

$kalorisehari = array_sum($makananharian) * $kalorisemakan;
$kaloriseminggu = $kalorisehari * 7;

$waktuistirahatharian = array(5, 6, 8, 8, 5, 6, 4);
$waktuistirahatseminggu = array_sum($waktuistirahatharian);

echo "Jumlah kalori sehari: $kalorisehari kalori<br>";
echo "Jumlah kalori seminggu: $kaloriseminggu kalori<br>";
echo "Waktu istirahat sehari: " . implode(" jam, ", $waktuistirahatharian) . " jam<br>";
echo "Jumlah waktu istirahat seminggu: $waktuistirahatseminggu jam<br>";

if ($kaloriseminggu >= 17500 && $waktuistirahatseminggu >= 56) {
    echo "Fu sudah sembuh.<br>";
} else {
    echo "Fu masih sakit.<br>";
}
?>
