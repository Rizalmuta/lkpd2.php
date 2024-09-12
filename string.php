<!DOCTYPE html>
<html>
<head>
    <title>document</title>
</head>
<body>
    <center>
    <form method="post">
        <label>Masukkan string:</label><br>
        <input type="text" name="input_string" id="input_string" required><br><br>
        <input type="submit" name="submit" value="Hitung Karakter">
    </form>
</center>

    <?php
    if(isset($_POST['submit'])){
        $input_string = $_POST['input_string'];

        $total_karakter = strlen($input_string);
        echo "<br>Total karakter: " . $total_karakter;
    }
    ?>
</body>
</html>
