<?php

class MyClass
{
    const CONSTANT = 'значение константы';
    const CONSTANT2 = 'значение константы';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }

    function showConstant2() {
        echo  self::CONSTANT . "\n";
    }
}

echo MyClass::CONSTANT . "\n";
