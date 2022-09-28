<?php

$arr = array(13, 33, 3, 15, 02, 10, 02, 59, 60);
$n1 = count($arr);
for($i1 = 0; $i1 < $n1; $i1++){

    for ($j1 =0; $j1 < $n1 - $i1 - 1; $j1++)
    {
        if ($arr[$j1] < $arr[$j1+1])
        {
            $t1 = $arr[$j1];
            $arr[$j1] = $arr[$j1+1];
            $arr[$j1+1] = $t1;
        }
    }
}
foreach($arr as $vl){
    echo "{$vl} \n" ; 
}