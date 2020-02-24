<?php


$myArr = [1, 1, 2, 2, 3, 3, 4, 4, 4, 4];


$sp = 0;

foreach ($myArr as $k=>$value) {

    if (isset($myArr[$k + 1])) {
        if ($value === $myArr[$k + 1]) {
            $myArr[$k + 1] = 0;
        }
    }

}

foreach ($myArr as $q => $rr){

    if ($rr === 0) {
        unset($myArr[$q]);
    }

}

foreach ($myArr as $q => $rr){

    echo $rr, ', ';

}

echo '<hr>';

echo count($myArr);


