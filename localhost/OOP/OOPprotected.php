<?php

class User
{
    public $id;
    private $email;
    private $password;

    public function setId($id): void
    {
        if (!is_int($id)) {
           throw new \Exception('id is not integer.');
        }

        $this->id = $id;
    }

    public function setEmail($email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new \Exception('Invalid email format');
        }
        $this->email = $email;
        var_dump($this);
    }

    public function setPassword($password): void
    {
        if (strlen($password) < 8){
            throw new \Exception('Passworf is to small');
        }
        $this->password = $password;
    }


    public function getId()
    {
        return $this->id;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
}

$errors = [];

$user = new User();
$user->setEmail('asdasd.asdasdasdasd.asd');

try {
    $user->setId(123);
} catch (\Exception $exception){
    $errors['id'] = $exception->getMessage();
}

try {
    $user->setEmail('abc@gmail.com');
} catch (\Exception $exception){
    $errors['email'] = $exception->getMessage();
}

try {
    $user->setPassword('12345678');
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
            <p><?= $key ?> . <?= $error ?></p>
        <?php endforeach ?>
    <?php endif ?>


</body>
</html>
