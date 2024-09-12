<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Simbol</title>
</head>
<body>
    
<form action="" method="post">
<label for="inputText">Masukkan teks:</label><br>
<textarea id="inputText" name="inputText"></textarea><br><br>
<input type="submit" value="Cari Simbol">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$teks = $_POST['inputText'];
//mencari karakter//
//fungsi prg math untuk mencari yang bukan huruf angka atau spasi 
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);
if (count($matches[0]) > 0) {
//buat ngialngin simbol yang berulang, jadi cuma simbol unik yang tersimpan di $uniquesymbols.
$uniquesymbols = array_unique($matches[0]);
//implode fungsinya untuk menggabungkan string yang dipisahkan oleh koma 
echo "Terdapat Simbol: " . implode(',', $uniquesymbols);
} else {
echo "Tidak ada simbol.";
}}
?>
</body>
</html>
