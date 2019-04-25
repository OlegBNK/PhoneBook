<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    число<input type="number" name="checknumber"><br>
    мин<input type="number" name="minnumber"><br>
    макс<input type="number" name="maxnumber"><br>
    флаг true<input type="radio" name="flag" value="1"><br>
    флаг false<input type="radio" name="flag" value="0" checked><br>
    <input type="submit">
</form>
</body>
</html>
<?php


function between_validator($number, $between, $flag) {
    $min = $between[0];
    $max = $between[1];

    if ($flag) {
        if ($number >= $min && $number <= $max) {
            return true;
        }
    } else {
        if ($number > $min && $number < $max) {
            return true;
        }
    }

    return false;
}

//between_validator(50, [50, 74], false);

if (!empty($_GET)) {
    $numberFrom = $_GET['checknumber'];
    $minFrom = $_GET['minnumber'];
    $maxFrom = $_GET['maxnumber'];
    $flagFrom = $_GET['flag'];

    $between = [$minFrom, $maxFrom];
    $result = between_validator($numberFrom, $between, $flagFrom);

    //if ($result == true) {
    if ($result) {
        echo "число $numberFrom в диапазоне между $minFrom и $maxFrom";
    } else {
        echo "число $numberFrom не попало в диапазон $minFrom - $maxFrom";
    }
}

