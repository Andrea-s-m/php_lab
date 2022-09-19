<?php
 
// numeros primos de 3 a 100, pois sabemos que o 2 ja é primo.

for ($i = 3; $i <= 100; $i++) {
    $divisores = 0;
     
    if ($resto == 0 && $i < $a)
    break;

    for($a = $i; $a >= 1; $a--){
    
        if (($i % $a) == 0) {
            $divisores++;
            
        }
    }

    if ($divisores == 2){
        echo (" $i");
    }
}
