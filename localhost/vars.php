<?php
$string = 'blablabla';
$copyString = $string;
$string = 'zzzzzz';

//var_dump($string);
//var_dump($copyString);
echo '<pre>';
$obj = new DateTime();
var_dump($obj);

function add15daysAndPrint(DateTime $date)
{
    $date->modify('+15 days');
    echo $date->format('Y-m-d H:i:s');
}

add15daysAndPrint($obj);

$obj->modify('-5 days');
var_dump($obj);
