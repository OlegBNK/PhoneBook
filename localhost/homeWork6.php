<?php


// 1 дз
/*
$numberBV = 10;
$betweenBV = [10, 100];
$flagBV = true;


function between_validator ($numberBV, array $betweenBV, bool $flagBV ){

    $from = $betweenBV[0];
    $to = $betweenBV[1];

    if ($flagBV === true) {
        if ($numberBV >= $from && $numberBV <= $to) {
            return true;
        } else {
            return false;
        }
    } else {
        if ($numberBV > $from && $numberBV < $to) {
            return true;
        } else {
            return false;
        }
    }
}

echo between_validator ($numberBV, $betweenBV,$flagBV);
*/
// 1 дз

// 2 дз


$dateDV = "2018-02-30";

function date_validator($dateDV){

    $timestamp = strtotime($dateDV);

    $year = date('Y', $timestamp);
    $month = date('m', $timestamp);
    $day = date('d', $timestamp);
    $dateIsCorrect = checkdate($month, $day, $year);

    if ($dateIsCorrect == true){
        return true;
        } else {
        return false;
    }
}

//echo date_validator($dateDV);
var_dump(date_validator(2018));
var_dump(date_validator("2018-02-12"));
var_dump(date_validator(23442));



/*


$dateDV = "2018-02-30";

function date_validator($dateDV){

    $timestamp = strtotime($dateDV);

    $year = date('Y', $timestamp);
    $month = date('m', $timestamp);
    $day = date('d', $timestamp);
    $dateIsCorrect = checkdate($month, $day, $year);

    if ($dateIsCorrect == true) {
        if ($timestamp = strtotime($dateDV) == true) {
            if (date('Y-m-d', $timestamp) == true) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}
//echo date_validator($dateDV);
var_dump(date_validator(2018));
var_dump(date_validator(2018-02-30));
var_dump(date_validator(23442));





*/





















// 2 дз

// 3 дз
/*
$digit_validator = "123";


function digit_validator($digit_validator){
    if (is_numeric($digit_validator)){
        return true;
    }else {
        return false;
    }
}
echo digit_validator($digit_validator);
*/
// 3 дз

// 4 дз
/*

$emailEV = "stanislav.protasevich@gmail.com";
$hostEV = "gmail.com";

function email_validator($emailEV, $hostEV){

    $result = filter_var($emailEV, FILTER_VALIDATE_EMAIL);

    if ((bool)$result && $hostEV != '') {
        $result = strpos($result, $hostEV);
    }

    return (bool)$result;
}

echo email_validator($emailEV, $hostEV);

*/
// 4 дз

// 5 дз
/*

$stringLength = "Stanislav.Protasevich";
$minSize = 1;
$maxSize = 25;

function string_length_validator ($stringLength, $minSize, $maxSize){
    if (strlen($stringLength) > $minSize && strlen($stringLength) < $maxSize){
        return true;
    } else {
        return false;
    }
}

echo string_length_validator ($stringLength, $minSize, $maxSize);

*/
// 5 дз

// 6 дз
/*

$valueIV = "google";
$arrayIV = ['yandex','google','bing'];

function in_validator ($valueIV, array $arrayIV){

    if (in_array($valueIV, $arrayIV)) {
        return true;
    } else {
        return false;
    }
}

echo in_validator ($valueIV, $arrayIV);

*/
// 6 дз

// 7 дз
/*
$a = 2;
$b = 2;

function identical_validator ($a, $b){


    if ($a === $b) {
        return true;
    } else {
        return false;
    }
}

echo identical_validator($a, $b);

*/
// 7 дз

// 8 дз
/*

$urlFV = "https://odessa.ithillel.ua/";

function url_validator($urlFV){
    if (filter_var($urlFV, FILTER_VALIDATE_URL)) {
        return true;
    } else {
        return false;
    }
}

echo url_validator($urlFV);

*/
// 8 дз

// 9 дз
/*
$valueNEV = "abc";

function not_empty_validator($valueNEV){
    if (!empty($valueNEV)) {
        return true;
    } else {
        return false;
    }
}

echo not_empty_validator($valueNEV);

*/
// 9 дз
?>

