<?php

for ($i=1; $i < 30; $i++) {
    if (90 % $i == 0) {
        //  membulatkan hasil pembagian jika perlu jadi,  hasilnya akan selalu bulat karena $i adalah pembagi dari 90
        echo "90 : $i = " .round(90 / $i) . "<br>";
    }
}
?>