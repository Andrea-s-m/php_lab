<?php

$arr = array(1,1,1,0,0,0,1);

$valorPosicao = count($arr) - 1;

$valorDecimal = 0;

for ($i = 0; $i < count($arr); $i++){
    $valorCalculado = ($arr[$i] * pow(2,$valorPosicao));

    $valorDecimal += $valorCalculado;
    $valorPosicao--;
}

echo " {$valorDecimal}";
