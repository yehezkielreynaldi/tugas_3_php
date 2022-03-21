<?php
$tabungan_awal = 150000;
$bunga_setahun = 12.5;
$bunga_rp = $bunga_setahun * $tabungan_awal / 100;
$total = $tabungan_awal + $bunga_rp;

echo "Tabungan Awal = Rp $tabungan_awal<br>";
echo "Bunga Setahun = $bunga_setahun %<br>";
echo "Total Tabungan Setahun = $tabungan_awal + $bunga_rp<br>";
echo "Jawaban : Rp $total";