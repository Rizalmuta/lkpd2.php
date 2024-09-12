<?php
 
$Bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
$Bill2 = [77, 99, 55, 81, 45, 90, 91, 98];

//array menjadi 1 array
$merge = array_merge($Bill1, $Bill2);

$unique = array_unique($merge);

asort($unique);

echo "Hasil : ";

echo implode(', ', $unique);




?>