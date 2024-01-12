<?php
echo('<table>');
for ($i = 1; $i <= 10; $i++) {
  echo('<tr>');
  for ($t = 1; $t <= 10; $t++) {
    if ($i % 2 === 0 && $t % 2 === 0){
      echo('<td>');
      echo('(' . $i*$t . ')');
      echo('</td>');
    } elseif ($i % 2 !== 0 && $t % 2 !== 0) {
      echo('<td>');
      echo('[' . $i*$t . ']');
      echo('</td>');
    } else {
      echo('<td>');
      echo($i*$t);
      echo('</td>');
    }
  }
  echo('</tr>');
}
echo('/<table>');

