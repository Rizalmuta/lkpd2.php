<?php

$data =  100; 
$lipat3 = 3;
$lipat5  = 5;

for ($i=1; $i <= $data; $i++) {
 if ($bagi = $i % $lipat3 ==0 && $bagi = $i % $lipat5==0){
echo "fizzbuzz <br>";
 }
 
 elseif($bagi = $i % $lipat3==0){
echo "fizz <br>";
 }

 elseif ($bagi = $i % $lipat5==0){
echo "buzz <br>";
 } 
 else {
 echo $i ."<br>";
 }
}



?>