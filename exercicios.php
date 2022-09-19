<?php
 
// numeros primos de 3 a 10, pois sabemos que o 2 ja é  
 $primos = $i
 array_push ($primos, $i);

for ($i = 3; $i <= 10; $i++) {
    $divisores = 0;
     
    for($a = $i; $a >= 1; $a--){
    
        if (($i % $a) == 0) {
            $divisores++;
        }
    }

    if ($divisores == 2){
        echo os numeros primos sao "$primos";
    }
}