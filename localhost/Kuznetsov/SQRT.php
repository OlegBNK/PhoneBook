<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.11.2018
 * Time: 19:20
 */

class Summ
{
    public $a;
    public $b;
    public $z;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function Result ($a, $b)
    {
        $z = $this->a + $this->b;
        return $z;
    }
}

$Summ = new Summ(2,3);

echo $Summ->Result($a,$b);