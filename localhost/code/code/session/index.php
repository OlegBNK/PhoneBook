<?php
    session_start();

    if (count($_POST) > 0) {
//        var_dump($_POST['csrf']);
//        echo "<br/>";
//        var_dump($_SESSION['signature']);
//        exit;
        $csrf = $_POST['csrf'] ?? null;
        $signature = $_SESSION['signature'] ?? '';

        if ($csrf !== $_SESSION['signature']) {
            exit("Атака!");
        }

        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }

    $signature = md5(random_int(1000000, 36148616164));
    $_SESSION['signature'] = $signature;



?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
    <input type="text" name="username">
    <br>
    <input type="text" name="password">
    <br>
    <input type="hidden" name="csrf" value="<?= $signature ?>">
    <br>
    <input type="submit" value="Login">
</form>

</body>
</html>