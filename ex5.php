<?php
/*
 * 5) Вы делаете страницу сайта библиотеки. Основные данные в библиотеке - это авторы и книги.
 * Количество авторов и книг не ограничено, но вы точно знаете, что у каждой книги есть только один автор.

    Дан массив $data, содержащий базу данных авторов и книг этой библиотеки.

    Выведите следующую информацию на сайте:

    1. Выведи строку: === Авторы ===
    2. Выведите всех авторов на сайте. Каждый автор должен быть на отдельной строке, при этом формат вывода должен быть следующий:

    Имя автора – его email – его год рождения.

    3. Выведи строку: === Книги ===
    4. Выведите все книги на сайте. Каждая книга должна быть на отдельной строке, при этом формат вывода должен быть следующий:

    Название книги – имя автора - год выпуска книги.

    Например:

    === Авторы ===
    Николай Васильевич Гоголь – nikolay_gogol@example.com - 1809
    Александр Сергеевич Пушкин – alexander_pushkin@example.com - 1799

      === Книги ===
    Мертвые души – Николай Васильевич Гоголь - 1841
    Пиковая дама - Александр Сергеевич Пушкин - 1833
    Для решении задачи запрещено использовать функции, анонимные функции, преобразование типов, классы, базу данных, другие переменные, кроме $data.

    Для переноса строки используйте:
    echo '<br>';
    или константу PHP_EOL
    echo PHP_EOL;

    Обратите внимание:
    данные и структуру массивов менять запрещено;
    не удаляйте комментарий - разделитель в коде.
 */

$data = [
    'authors' => [
        301 => [
            'id' => 301,
            'name' => 'Александр Сергеевич Пушкин',
            'email' => 'alexander_pushkin@example.com',
            'birthYear' => 1799,
        ],
        10 => [
            'id' => 10,
            'name' => 'Николай Васильевич Гоголь',
            'email' => 'nikolay_gogol@example.com',
            'birthYear' => 1809,
        ],
        17 => [
            'id' => 17,
            'name' => 'Михаил Юрьевич Лермонтов',
            'email' => 'mikhail_lermontov@example.com',
            'birthYear' => 1814,
        ],
    ],
    'books' => [
        [
            'title' => 'Евгений Онегин',
            'publishedAt' => '1823—1832',
            'author' => 301,
        ],
        [
            'title' => 'Полтава',
            'publishedAt' => '1828—1829',
            'author' => 301,
        ],
        [
            'title' => 'Мёртвые души',
            'publishedAt' => '1842',
            'author' => 10,
        ],
        [
            'title' => 'Сказка о рыбаке и рыбке',
            'publishedAt' => '1833',
            'author' => 301,

        ],
    ],
];

echo '=== Авторы ===<br>';
foreach ($data['authors'] as $author) {
    echo $author['name'].' – '.$author['email'].' - '.$author['birthYear'].'<br>';
}

echo '<br>=== Книги ===<br>';
foreach ($data['books'] as $book) {
    echo $book['title'].' – '.$data['authors'][$book['author']]['name'].' - '.$book['publishedAt'].'<br>';
}