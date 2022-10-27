<?php 

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$pares = array();

for($i=0; $i<= count($num); $i++) {
    if ($i % 2 === 0) {
    array_push($pares, $i);
  
}
}

echo "A soma dos pares é:" .array_sum($pares); 