<?php

$fullNameErrors = [];

    if (count($_POST)>0) {

        $fullName = $_POST['full_name'] ?? NULL;
        $email = $_POST['email'] ?? NULL;
        $message = $_POST['message'] ?? NULL;

        if (empty($fullName)) {
            $fullNameErrors[] = 'Поле не должно быть пустым';
        }
        if (mb_strlen($fullName) <4) {
            $fullNameErrors[] = 'Длина имени не должна быть меньше 4 символов';
        }   if (mb_strlen($fullName) >20) {
            $fullNameErrors[] = 'Длина имени не должна быть больше 20 символов';
        }
    }

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>
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

<form method="post">
    Имя:
    <?php if (count($fullNameErrors) >0): ?>
        <?php foreach ($fullNameErrors as $fullNameError): ?>
            <p><?= $fullNameError ?></p>
        <?php endforeach ?>
    <?php endif ?>
    <input type="text" name="full_name" value="<?= $fullName ?>"><br><br>
    Email:
    <input type="text" name="email"><br><br>
    Сообщение:
    <textarea name="message"> </textarea><br><br>
    <input type="submit" value="Отправить">

</form>

</body>
</html>




