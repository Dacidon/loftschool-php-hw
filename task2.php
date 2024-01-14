<?php
// ДЗ 1 Задание 2
// Решить задачу и вывести её условие
const TOTAL_DRAW_VALUE = 80;
const PENCIL_DRAW_VALUE = 40;
const MARKER_DRAW_VALUE = 23;

echo "На школьной выставке " . TOTAL_DRAW_VALUE . " рисунков. " . MARKER_DRAW_VALUE . " из них выполнены <br/>фломастерами, " . PENCIL_DRAW_VALUE . " карандашами, а остальные — красками. <br/>Сколько рисунков, выполненные красками, на школьной выставке? <br/><br/>";
echo "Для решения задачи потребуется вычесть из общего количества рисунков (" . TOTAL_DRAW_VALUE . ") <br/>сумму количества рисунков, выполненных при помощи карандашей (" . PENCIL_DRAW_VALUE . ") <br/>и рисунков, выполненных при помощи фломастеров (" . MARKER_DRAW_VALUE . "). <br/>";
echo "А именно: " . TOTAL_DRAW_VALUE . "-(" . PENCIL_DRAW_VALUE . "+" . MARKER_DRAW_VALUE . ") = " . (TOTAL_DRAW_VALUE - (PENCIL_DRAW_VALUE + MARKER_DRAW_VALUE) . "<br/>");