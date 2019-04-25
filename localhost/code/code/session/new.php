<?php

session_start();

var_dump($_SESSION['signature']);
echo "<br>";
var_dump(md5($_SERVER['HTTP_USER_AGENT']));

if ($_SESSION['signature'] != md5($_SERVER['HTTP_USER_AGENT'])) {
    echo "Жулики!";
} else {
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
}
