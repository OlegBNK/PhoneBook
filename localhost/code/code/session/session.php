<?php

session_start();

$_SESSION['username'] = 'user2@gmail.com';
$_SESSION['password'] = '654321';
$_SESSION['signature'] = md5($_SERVER['HTTP_USER_AGENT']);

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//$_SESSION['username'] = 'user2@gmail.com';
//$_SESSION['password'] = '654321';
