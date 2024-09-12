<?php 

function checkJawaban($nama, ...$arrJawaban){ 
$jawaban = ['A','D','C','C','B','A','E','B','A','E']; 
$arrBenar = []; 

    foreach ($jawaban as $key => $value) {
        if ($arrJawaban[$key] == $value) {
            $arrBenar[$key] = 1;
        } else {
            $arrBenar[$key] = 0;
        }
    }

    echo "Nama : ". $nama. "<br>";
    //menghitung jumlah benar 
    echo "Jumlah jawaban benar : <b>". count(array_keys($arrBenar, 1)). "</b><br>";
    echo "Jumlah jawaban benar : <b>". count(array_keys($arrBenar, 0)). "</b ><br>";
    //menghitung jawaban salah

}

checkJawaban("putra",'A','D','C','C','B','A','E','B','A','E');

?>