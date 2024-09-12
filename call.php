<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        background-color: pink;
        }
       
    </style>
</head>
<body>

<div class="calculator">
    <form action="call.php" method="post">
        Angka 1: <input type="text" name="angka1" required><br>
        Angka 2: <input type="text" name="angka2" required><br>
        Operasi: 
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <br>
        <input type="submit" name="hitung" value="Hitung">
    </form>
</div>

</body>
</html>

<?php
if(isset($_POST['hitung'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];

    switch ($operasi) {
        case 'tambah':
            $hasil = $angka1 + $angka2;
            break;
        case 'kurang':
            $hasil = $angka1 - $angka2;
            break;
        case 'kali':
            $hasil = $angka1 * $angka2;
            break;
        case 'bagi':
            $hasil = $angka1 / $angka2;
            break;            
        default:
            $hasil = "Operasi tidak valid";
            break;
    }
    echo "Hasil: " . $hasil . "";
}
?>
