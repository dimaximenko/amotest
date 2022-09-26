<?php
/*
 * 6) Создайте функцию task17 с одним параметром $n
    Внутри этой функции вам нужно сделать следующее:

    1. Заведите переменную: $sum = 0; - сумма чисел делящихся на 5
    2. В цикле от 0 до $n (включая) сделайте следующее (должно выполнится только одно из условий):

    - если число делится без остатка на 3 – выведите это число с помощью оператора echo (каждое число на отдельной строке)
    - если число делится без остатка на 5 – прибавьте это число к переменной $sum
    - если число делится и на 5 и на 3 – то вычтите из $sum единицу.

    Функция должна вернуть сумму в качестве результата своей работы.

    Для переноса строки используйте:
    echo '<br>';
    или константу PHP_EOL
    echo PHP_EOL;

    Обратите внимание:
    для решении задачи запрещено использовать другие функции, анонимные функции, преобразование типов, классы, глобальные переменные.

 */

task17(136);
function task17($n)
{
    $sum = 0;

    for ($i = 0; $i <= $n; $i++) {
        if (!($i%3) && !($i%5)) {
            $sum--;
        } elseif (!($i%3)) {
            echo $i.'<br>';
        } elseif (!($i%5)) {
            $sum+=$i;
        }
    }

    return $sum;
}