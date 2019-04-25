<?php
$array = [151,23,3,50,6,7753,8,-99, 0, 5, 72, 1111, 323432,];
$numbersGreaterThenX = [];
$x = 100;
foreach($array as $arrayValue) {
    if ($arrayValue > $x) {
        $numbersGreaterThenX[] = $arrayValue;
    }
}
var_dump($numbersGreaterThenX);