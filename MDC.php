<?php

// calcular o MDC
$numero1 = 130;   
$numero2 = 50;
$resultado;

//130 / 50 2 com resto de 30
    //50 / 30 1 resto 20
    //30 / 20 1 resto 10
    //20 / 10 2 resto 0

    //mdc é 10

   do {
            $resultado = $numero1 % $numero2;
            $numero1 = $numero2;
            $numero2 = $resultado;
   }
   while ($resultado !== 0); 
   

   echo "o MDC é : $numero1";     


