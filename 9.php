<?php
$rupiah = 1750; 

$coins = [1000, 500, 200, 100];
$result = [];

// Menghitung jumlah koin
foreach ($coins as $coin) {
    $result[$coin] = intdiv($rupiah, $coin); 
    $rupiah = $rupiah % $coin; 
}

// Menampilkan hasil
echo "Jumlah koin yang diperlukan: <br>";
foreach ($result as $coin => $count) {
    echo "Koin Rp $coin : $count <br>";
}
?>