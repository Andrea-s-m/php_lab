<?php

$arr = array(1,1,1,0,0,0,1);

$valorPosicao = count($arr) - 1;

$valorDecimal = 0;

for ($i = 0; $i < count($arr); $i++){
    $valorCalculado = ($arr[$i] * pow(2,$valorPosicao));
    // $valorCalculado = 1 * 2 no poder da $valorPosição(primeira vez : 6)
    // $valorCalculado = 1 * 2 no poder da $valorPosição(segunda vez : 5)
    // $valorCalculado = 1 * 2 no poder da $valorPosição(terceira vez : 4)
    // $valorCalculado = 0 * 2 no poder da $valorPosição(quarta vez : 3)
    // $valorCalculado = 0 * 2 no poder da $valorPosição(quinta vez : 2)
    // $valorCalculado = 0 * 2 no poder da $valorPosição(sexta vez : 1)
    // $valorCalculado = 1 * 2 no poder da $valorPosição(setima vez : 0)

    $valorDecimal += $valorCalculado;
    $valorPosicao--;
}

echo " {$valorDecimal}";
