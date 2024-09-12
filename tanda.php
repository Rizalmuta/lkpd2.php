<!-- buatlah sebuah program yanng memiliki sebuah function yang bisa menghitung jumlah karakter "Karakter Utama" -->

<?php
function hitungKarakterUtama($text, $dicari) {
    return substr_count($text, $dicari);
}

$text = "Karakter Utama";
$dicari = 'a';
$jumlahKarakter = hitungKarakterUtama($text, $dicari);

echo "Jumlah karakter '$dicari' dalam '$text' adalah: $jumlahKarakter";
?>
