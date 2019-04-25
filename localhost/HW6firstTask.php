<?php


/*


$a1 = 5;

// Если значение переменной меньше 100, выполнить инструкцию, следующую за оператором if
if ($a1 < 100)
  echo "Число $a1 меньше, чем 100";

// переменная $username никак не инициализирована: по умолчанию значение null
// с помощью оператора (Логическое НЕ) инвертируем значение в TRUE
if (!$username) {
  $username = "User";
  // и выводим имя пользователя на экран
  echo $username;
}

*/

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

















/*
$number = 10;
$between = [10, 100];
$flag = "true";

function between_validator ($number, array $between, bool $flag){

    $from = $between[0];
    $to   = $between[1];

    if ($flag === true) {
        ($number >= $from && $number <= $to);
        return true;
    } else {
        return false;
    }
}
*/ // открой это





    /*
    if ($flag === true) {
        if ($number >= $from && $number <= $to) {
            return true;
        }
        else {
            return false;
        }
}
    }



}
*/





/*
function digit_validator ($number){

    if (is_numeric($number) == true){
        return true;
    } else {
        return false;
    }
}

$value = '12345sdsf';
if (digit_validator($value)) {
    echo $value . ' - число';
} else {
    echo $value . ' - не число';
}

*/


//function between_validator($number, array $between, bool $flag)
//{
//    $from = $between[0];
//    $to = $between[1];
//
//    if ($flag === true) {
//        if ($number >= $from && $number <= $to) {
//            return true;
//        } else {
//            return false;
//        }
//    } else {
//        if ($number > $from && $number < $to) {
//            return true;
//        } else {
//            return false;
//        }
//    }
//}
//
//$number = 5;
//$between = [10, 100];
//$flag = true;
//
//$result = between_validator($number, $between, $flag);
//var_dump($result); echo "<br>";
//
//$result = between_validator(5, [1, 10], true);
//var_dump($result); echo "<br>"; де..дела
//делал в хиллеле











