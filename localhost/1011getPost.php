<?php

$products = [
    1 =>[
        'name' => 'cherry',
        'price' => "9,99"
    ],
    2 => [
        'name' => 'apple',
        'price' => "8,99"
    ],
    3 => [
        'name' => 'banana',
        'price' => "7,99"
    ],
];


foreach ($products as $key => $product)  {
    echo "<a href='?id={$key}'>{$product['name']}</a><br>";
}
if (isset($_GET['id']) && isset($products[$_GET['id']])) {
    echo "<pre>";
    var_dump($products[$_GET['id']]);
    echo "</pre>";
}
else {
    echo "<p>Продукта с индетификатором {$_GET['id']} нет</p>";
}




    //echo "<pre>";
//var_dump($_GET['id']);
//var_dump($products[$_GET['id']]);
//echo "</pre>";
