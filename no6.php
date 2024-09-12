<?php 
 
 $barang = [

    [
    'nama_barang' => 'pasta gigi',
    'harga_barang' => 18000,
    'jumlah_beli' => 1,
    ],
    [
    'nama_barang' => 'sabun mandi',
    'harga_barang' => 5000,
    'jumlah_beli' => 3,
     ],
     [
    'nama_barang' => 'Aloe vera sheet mask',
    'harga_barang' => 15000,
    'jumlah_beli' => 4,
    ],
    ];

    $price = 0;
    
   echo "Daftar belanjaan : <br>";
   echo "<ol>";

   foreach ($barang as $item) {
       $subprice = $item['harga_barang'] * $item['jumlah_beli'];
       echo "<li>" . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : " . number_format($subprice, 0, ',', '.') . ",-</li>";
       $price += $subprice;
   }

   echo "</ol>";

   echo 'Total harganya yaitu <b>Rp. ' . number_format($price, 0, ',', '.') . "</b>";  
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];
    
    $hasil = 0;
    $error = '';

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
            if ($angka2 == 0) {
                $error = 'Pembagian dengan nol tidak diperbolehkan!';
            } else {
                $hasil = $angka1 / $angka2;
            }
            break;
        default:
            $error = 'Operasi tidak valid!';
            break;
    }
}
?>a,2w