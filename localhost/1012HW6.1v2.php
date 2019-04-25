<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$number = $_POST['number'];

$value = 10;

$range = [
    $a = 10,
    $b = 100
];


function between_validator($value, array $range, bool $include) {

}

/*function between_validator ($number, $between, $bool){

    $between = [
            $a = $_POST['a'],
            $b = $_POST['b']
    ];
}*/

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>between_validator</title>
</head>
<body>
Проверяемое число: <br>
<input type="text" name="number" value="<?= $number ?>"<br>

<input type="submit" value="Отправить">

</body>
</html>
