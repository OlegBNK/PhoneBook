<?php

$errors = [];

$user = new User;
try {
    $user->setId(new Identifier(0));
} catch (\Exception $exception) {
    $errors['id'] = $exception->getMessage();
}

try {
    $user->setEmail('abcgmail.com');
} catch (\Exception $exception) {
    $errors['email'] = $exception->getMessage();
}

try {
    $user->setPassword('123456');
} catch (\Exception $exception) {
    $errors['password'] = $exception->getMessage();
}

//echo "<pre>";
//var_dump($user);
//echo "</pre>";
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


    <?php if(count($errors) == 0): ?>
    <p><?= $user->getId() ?></p>
    <p><?= $user->getEmail() ?></p>
    <p><?= $user->getPassword() ?></p>
    <?php else: ?>
        <?php foreach ($errors as $key => $error): ?>
            <p><?= $key ?> - <?= $error ?></p>
        <?php endforeach ?>
    <?php endif ?>

</body>
</html>
