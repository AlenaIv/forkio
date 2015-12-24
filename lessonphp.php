<?php
$array = [1, 2, 4, 5, 6, 7, 8, 10, -12, -5, -3, -17, 0];
f($array);
function f($a)
{
    $positive = 0;
    $dobut = 1;
    foreach ($a as $e) {
        if ($e > 0) {
            $positive += $e;
        }
        if ($e % 2 == 0) {
            $dobut *= $e;
        }
    }
    if (!$positive) {
        echo 'no positive';
    } else {
        echo $positive . '<br>';
    }
    if ($dobut == 1) {
        echo "nema parnyh";
    } else {
        echo $dobut;
    }
}

$S = 200;
$t = 3;

echo speed($s, $t);

function speed($kmph){
    $kmph = $S/$t;
    return $kmph;
}

function transf{$mps){
    $mps = $kmph/3.6;
    return $mps;
}

?>


