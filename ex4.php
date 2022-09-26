<?php

/*
 * 4) Напишите функцию с названием countBasket, с одним параметром - массив позиций в корзине.
   Функция должна посчитать и вернуть сколько всего в корзине товаров (в одной позиции корзины может быть несколько товаров - поле quantity).
   В вашу функцию будут передавать массив следующей структуры:
 *
 */


$basket = [
    [
        'position' => 'Книга по php',
        'quantity' => 1,
    ],
    [
        'position' => 'Мышь беспроводная',
        'quantity' => 12,
    ],
];

$countGoods = countBasket($basket);
echo $countGoods;

function countBasket($basket)
{
    $count = 0;
    foreach ($basket as $item) {
        $count+=$item['quantity'];
    }

    return $count;
}