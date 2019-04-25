<?php

class Vehicle
{
    final public function test()
    {

    }
}

class Car extends Vehicle
{
    public function test()
    {

    }
}

// нельзя переопределить финальный метод родительского класса
