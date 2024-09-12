<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Bilangan Prima</title>
</head>
<body>
    <form action="prima.php" method="POST">
        <label for="number">Masukkan angka:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Cek</button>
    </form>
</body>
</html>

<?php
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = intval($_POST['number']);
if (isPrime($input)) {
        echo "$input adalah bilangan prima.";
    } else {
        echo "$input bukan bilangan prima.";
    }
}
?>
