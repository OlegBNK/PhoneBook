<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #4D5662;">

</body>
</html>
<?php

  
function email_validator($email, $host = '') {
/*

//   $result = false;
//    for ($i = 0; $i < strlen($email); $i++) {
//        if ($email[$i] == '@') {
//            $result = true;
//        }
//    }
//    return $result;
*/
    $result = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ((bool) $result && $host != '') {
        $result = strpos($result, $host);
    }

    return (bool) $result;
}

var_dump(email_validator('stanislav.protasevichgmail.com'));
var_dump(email_validator('stanislav.protasevichgmail.com', 'gmail.com'));
var_dump(email_validator('stanislav.protasevich@gmail.com', 'gmail.com'));
var_dump(email_validator('stanislav.protasevich@gmail.com', 'hillel.ua'));

// function between_validator(){}

$email_a = 'joe@example.com';
$email_b = 'bogus';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail адрес '$email_a' указан верно.\n";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail адрес '$email_b' указан верно.\n";
} else {
    echo "E-mail адрес '$email_b' указан неверно.\n";
}
?>


$emailA = 'stanislav.protasevichgmail.com';
$emailB = 'stanislav.protasevichgmail.com', 'gmail.com';
$emailC = 'stanislav.protasevich@gmail.com', 'gmail.com';
$emailD = 'stanislav.protasevich@gmail.com', 'hillel.ua';

function email_validator($email, $host =''){
filter_var ( $email [, int $emailA = FILTER_VALIDATE_EMAIL [, mixed $emailA ]]);
    //if (filter_var($email))
}
//filter_var ( mixed $variable [, int $filter = FILTER_VALIDATE_EMAIL [, mixed $options ]] )

