<?php
function hitungKarakterUtama($text, $dicari) {
    return substr_count($text, $dicari);
}

$text = "Karakter Utama";
$dicari = 'a';
$jumlahKarakter = hitungKarakterUtama($text, $dicari);

echo "Jumlah karakter '$dicari' dalam '$text' adalah: $jumlahKarakter";
?>
