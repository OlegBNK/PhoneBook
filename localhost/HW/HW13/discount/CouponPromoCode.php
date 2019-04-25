<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 30.10.2018
 * Time: 19:36
 */

require_once 'PromoCode.php';

class CouponPromoCode extends PromoCode
{
    const SMALL = '10%';
    const MEDIUM = '20%';
    const LARGE = '30%';


































    public function showCouponPromoCode () {
        $this->SMALL =
    }
    public function __construct($discount)
    {
        parent::__construct($discount);
    }
}




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

 */