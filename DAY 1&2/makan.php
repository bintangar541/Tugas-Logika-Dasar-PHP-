<?php

$totalHarga = 190000;
$totalPembelian = 190000;
$diskon = 0;
$hari = date("l");

if ($hari == "wednesday") {
    $diskon = 5;
    if ($totalPembelian > 100000) {
        $diskon = 7;
    }
}

$totalPembelian *= ((100 - $diskon) / 100);

echo "Hari : $hari";
echo "<br>";
echo "Total Harga sebelum diskon : $totalHarga";
echo "<br>";
echo "Diskon: $diskon %";
echo "<br>";
echo "Total Harga setelah diskon : $totalPembelian";

?>
