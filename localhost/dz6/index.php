<?php

$e = "Пусто";

$Arrays = ['google', 'facebook', 'yandex'];


function between_validator ($int) {
    return ($int <= 100 && $int >= 10) ? $int.' - Всё норм': $int.' - Привысил диапазон';
}

function date_validator ($date) {
    return ((bool)strtotime($date) != false) ? $date.' - Всё норм': $date.' - Не норм';
}

function digit_validator ($int) {
    return (is_numeric($int)) ? $int.' - Всё норм': $int.' - Не норм';
}

function email_validator ($email) {
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? $email.' - Всё норм': $email.' - Не норм';
}

function string_length_validator ($text , $min = 5, $max = 25) {
    return (strlen($text) <= $max && strlen($text) >= $min) ? strlen($text).' - Всё норм': strlen($text).' - Привысил диапазон';
}

function in_validator ($array, $a) {
    return (in_array($array, $a)) ? 'Всё норм': 'Не норм';
}

function identical_validator ($str_f, $str_l) {
    return ($str_f === $str_l) ? $str_f.' = '.$str_l.' Всё норм': $str_f.' = '.$str_l.' Не норм';
}

function uri_validator  ($url) {
    return (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) ? $url.' - Всё норм': $url.' - Не норм';
}

function not_empty_validator  ($str) {
    return ($str != 0) ? '"'.$str.'" - Всё норм': '"'.$str.'" - Не норм';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="STYLESHEET" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/css/foundation.min.css">

</head>
<body>
<div class="row">
    <form action="" method="post">
        <h1>Заполните</h1>
        <hr>
        <h3>1. Проверяем значение</h3>
        <div class="large-3 column">
            <p>Диапазон чисел 10 - 100</p>
        </div>
        <div class="large-6 column">
            <input type="text" name="int_validator" value="<?=random_int(0, 200)?>">
        </div>
        <div class="large-3 column">
            <p><?=($_POST['int_validator']) ? between_validator($_POST['int_validator']) : $e ?></p>
        </div>
        <hr>

        <h3>2. Проверяем  формат даты</h3>
        <div class="large-3 column">
            <p>2018-10-01</p>
        </div>
        <div class="large-6 column">
            <input type="text" name="date" value="2018-10-01">
        </div>
        <div class="large-3 column">
            <p><?=($_POST['date']) ? date_validator($_POST['date']) : $e ?></p>
        </div>
        <hr>

        <h3>3. Проверяем  формата числа</h3>
        <div class="large-3 column">
            <p>1234567890</p>
        </div>
        <div class="large-6 column">
            <input type="text" name="int" value="" placeholder="Принимаю значения только Int">
        </div>
        <div class="large-3 column">
            <p><?=($_POST['int']) ? digit_validator($_POST['int']) : $e ?></p>
        </div>
        <hr>

        <h3>4. Проверяем  формата Email</h3>
        <div class="large-3 column">
            <p>exemple@gmail.com</p>
        </div>
        <div class="large-6 column">
            <input type="text" name="email" value="" placeholder="Принимаю значения только exemple@gmail.com">
        </div>
        <div class="large-3 column">
            <p><?=($_POST['email']) ? email_validator ($_POST['email']) : $e ?></p>
        </div>
        <hr>

        <h3>5. Проверяем размера строки</h3>
        <div class="large-3 column">
            <p>stanislav.protasevich - Min5 max 25</p>
        </div>
        <div class="large-6 column">
            <input type="text" name="text" value="" placeholder="Принимаю значения только string">
        </div>
        <div class="large-3 column">
            <p><?=($_POST['text']) ? string_length_validator($_POST['text']) : $e ?></p>
        </div>
        <hr>

        <h3>6. Проверяем наличия значения в заданном списке</h3>
        <div class="large-3 column">
            <p>'google', 'facebook', 'yandex'</p>
        </div>
        <div class="large-6 column">
            <input type="text" name="array" value="" placeholder="Принимаю значения только string">
        </div>
        <div class="large-3 column">
            <p><?=($_POST['array']) ? in_validator($_POST['array'],$Arrays) : $e ?></p>
        </div>
        <hr>

        <h3>7. Проверяем идентичност двух значений</h3>
        <div class="large-3 column">
            <p>1 = 1 TRUE</p>
        </div>
        <div class="large-3 column">
            <input type="text" name="str_f" value="" placeholder="Принимаю значения только string">
        </div>
        <div class="large-3 column">
            <input type="text" name="str_l" value="" placeholder="Принимаю значения только string">
        </div>
        <div class="large-3 column">
            <p><?=($_POST['str_f'] && $_POST['str_l']) ? identical_validator($_POST['str_f'],$_POST['str_l']) : $e ?></p>
        </div>
        <hr>

        <h3>8. Проверяем адреса веб-сайта</h3>
        <div class="large-3 column">
            <p>https://exemple.com/ TRUE</p>
        </div>
        <div class="large-6 column">
            <input type="text" name="url" value="" placeholder="Принимаю значения только string">
        </div>
        <div class="large-3 column">
            <p><?=($_POST['url']) ? uri_validator ($_POST['url']) : $e ?></p>
        </div>
        <hr>


        <h3>9. Проверяем “не пустое” значение</h3>
        <div class="large-3 column">
            <p>" " FALSE</p>
        </div>
        <div class="large-6 column">
            <input type="text" name="empty" value="" placeholder="Принимаю значения только string">
        </div>
        <div class="large-3 column">
            <p><?=($_POST['empty']) ? not_empty_validator  ($_POST['empty']) : $e ?></p>
        </div>
        <hr>

        <button value="Start">Start</button>
    </form>
</div>





</body>
</html>