<?php

abstract class PromoCode
{
    abstract public function setDiscount(float $price):float;
}

class DiscountPercentPromoCode extends PromoCode
{
    protected $price;
    public $percent;

    public function __construct()
    {
    }

    public function DiscountPercentPromoCode($percent)
    {
        $this->percent = $percent;
    }

    public function getDiscount($price)
    {// цена со скидкой = полная цена - (полная цена * (процент скидки / 100))
        $newPrice = $price - ($price * ($percent / 100) );

    }
}

//$promoCode = new DiscountPercentPromoCode(10); скидка 10 %
//$promoCode->getDiscount(100); // 90       //цена 100 со скидкой 90

///тут считаешь скидку по проценту и сумме
/// цена со скидкой = полная цена - (полная цена * (процент скидки / 100))

