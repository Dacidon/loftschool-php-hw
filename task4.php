<?php
// ДЗ 1 Задание 4
// Выбор строки о рабочем или выходном дне, в зависимости от номера дня
$day = 0;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo('Это рабочий день');
        break;
    case 6:
    case 7:
        echo('Это выходной день');
        break;
    default:
        echo('Неизвестный день');
        break;
}