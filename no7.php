<?php


function wrapText($text) {
    //buat memisahkan string menjadi array cenah
    $count = str_split($text);


    if (count($count) > 50) {
        $text = substr($text, 0 , 50);
        //buat memotong string dari posisi 0 hingga 50 karakter pertama
        // sebagai tanda sudah dipotong 
        $text .= "...";
    }

    echo $text;
}

$kata = "Lorem ipsum dolor sit memet, consectetur adipiscing elit. Nulla vel auctor turpis. Donec vel erat sollicitudin, accumsan lectus eget, blandit orci. Integer ut erat ipsum. Sed porta at erat vitae ornare. Aenean auctor, lacus ac condimentum ultricies, mi enim lobortis nibh, sit amet laoreet arcu felis nec quam. Cras euismod ex magna, in scelerisque urna laoreet quis. Aliquam tincidunt lacus sed tempor dapibus. Morbi sit amet dolor hendrerit, sollicitudin purus non, blandit sem.";

echo "<b>Kalimat awal : </b> " . $kata . "</br>";

wrapText($kata);
?>