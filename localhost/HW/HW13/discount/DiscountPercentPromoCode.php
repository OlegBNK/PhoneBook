<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 30.10.2018
 * Time: 14:33
 */

require_once 'PromoCode.php';

class DiscountPercentPromoCode extends PromoCode
{
    private $discountPercent;
    private $percent;
    public function __construct($discountPercent, $percent)
    {
        $this->discountPercent = $discountPercent;
        $this->percent = $percent;
    }
    public function setPercent($percent): void
    {
        if (!is_int($percent) && $percent <= 0 && $percent >= 100)
        { return $this->

        }

    }
    public function getPercent()
    {
        return $this->percent;
    }
    public function setDiscount(float $discount):float
    {
        $this->discountPercent = $discount;
        $discount = PromoCode::class - (PromoCode::class * ($percent / 100));
    }
}
$disco = new DiscountPercentPromoCode();

// public function getDiscount(float $price) {

///тут считаешь скидку по проценту и сумме
/// цена со скидкой = полная цена - (полная цена * (процент скидки / 100))
//    $PriceWithPromo = $price - ($price * ())
//    return $price;
//  }
