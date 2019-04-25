<?php
    require_once 'example/db.inc.php';

    if (count($_POST) > 0) {

        $email = $_POST['username'];
        $password = $_POST['password'];

        $sql = "
          SELECT * FROM user WHERE email= :email AND password = :password LIMIT 1
        ";

        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        $stmt->execute();

        echo $sql;
        echo "<br>";

//        $result = $dbh->query($sql);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            echo "<pre>";
            var_dump($user);
            echo "</pre>";
        }

    }

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
    <input type="submit" value="Login">
</form>

</body>
</html>