<?php
define('TOTAL_DRAW_VALUE', 80);
define('PENCIL_DRAW_VALUE', 40);
define('MARKER_DRAW_VALUE', 23);

echo "На школьной выставке " . TOTAL_DRAW_VALUE . " рисунков. " . MARKER_DRAW_VALUE . " из них выполнены <br/>фломастерами, " . PENCIL_DRAW_VALUE . " карандашами, а остальные — красками. <br/>Сколько рисунков, выполненные красками, на школьной выставке? <br/><br/>";
echo "Для решения задачи потребуется вычесть из общего количества рисунков (" . TOTAL_DRAW_VALUE . ") <br/>сумму количества рисунков, выполненных при помощи карандашей (" . PENCIL_DRAW_VALUE . ") <br/>и рисунков, выполненных при помощи фломастеров (" . MARKER_DRAW_VALUE . "). <br/>";
echo "А именно: " . TOTAL_DRAW_VALUE . "-(" . PENCIL_DRAW_VALUE . "+" . MARKER_DRAW_VALUE . ") = " . (TOTAL_DRAW_VALUE - (PENCIL_DRAW_VALUE + MARKER_DRAW_VALUE) . "<br/>");