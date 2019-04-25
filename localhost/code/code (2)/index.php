<?php

require_once 'oldold/example/db.inc.php';
require_once 'Model/User.php';
require_once 'ValueObject/IdentifierValueObject.php';
require_once 'Hydrator/UserHydrator.php';

$userHydrator = new UserHydrator();
$result = $dbh->query("SELECT * FROM user");
$users = $userHydrator->hydrate($result->fetchAll(PDO::FETCH_ASSOC));

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

<?php /* @var User $user */ ?>
<?php foreach ($users as $user): ?>
    <?= $user->echoViewPrint() ?>
    <hr>
<?php endforeach ?>

</body>
</html>