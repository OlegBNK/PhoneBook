<?php

require_once 'example/db.inc.php';

$sql = <<< QWERT
  INSERT INTO user
  (email, password)
  VALUES
  (:email, :password)
QWERT;

$stmt = $dbh->prepare($sql);
$stmt->bindValue(':email', 'stanislav.protasevich@gmail.com');
$stmt->bindValue(':password', '897974351');
$stmt->execute();

echo 'Пользователь с id: ' . $dbh->lastInsertId() . ' успещно вставлен';
