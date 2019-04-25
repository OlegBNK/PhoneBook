<?php

$dsn = 'mysql:host=127.0.0.1;dbname=sandbox';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);

    $result = $dbh->query("INSERT INTO education (date_from, date_to, name, occupation, description)
VALUES ('2007-09-01', '2010-09-01', 'USM', 'Magistr', 'Some description'), ('2007-09-01', '2010-09-01', 'USM', 'Magistr', 'Some description');
");

if ($result === false) {
    echo($dbh->errorInfo());
}










//    while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
//        echo "<pre>";
//        var_dump($data);
//        echo "</pre>";
//    }
//    foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $edu) {
//        echo "<pre>";
//        var_dump($edu);
//        echo "</pre>";
//    }



} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

