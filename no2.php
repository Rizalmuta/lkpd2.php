<?php
$pembelian = 130000;
$hari = "friday";
$totalBayar = 0;
//jika pembayaran diatas 10000 maka akan mendapatkan diskon sebersar 7%
if ($pembelian > 100000) {
    $totalBayar = $pembelian * (1 - 0.07); 
} else {
    //kalo dibawah 10000 maka tidak dapat diskon
    $totalBayar = $pembelian;
}

echo "hari ini: " . $hari . "<br>";
echo "Total pembelanjaan: " . number_format($pembelian, 0, '.', '.') . "<br>";
echo "Total yang harus dibayar: " . number_format($totalBayar, 0, '.', '.');
?>
