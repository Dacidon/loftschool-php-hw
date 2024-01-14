<?php
function task1($array, $choice = false) {
  if ($choice) {
    return implode($array);
  } else {
    foreach ($array as $value) {
      echo("<p>$value</p>");
    }
  }
}

function task2() {
  $oper = func_get_arg(0);
  $numbers = func_get_args();
  $result = $numbers[1];

  switch ($oper) {
    case '+':
      for($i = 2; $i < func_num_args(); $i++) {
        $result += (float)$numbers[$i];
      }
      break;
    case '-':
      for($i = 2; $i < func_num_args(); $i++) {
        $result -= (float)$numbers[$i];
      }
      break;
    case '/':
      for($i = 2; $i < func_num_args(); $i++) {
        $result /= (float)$numbers[$i];
      }
      break;
    case '*':
      for($i = 2; $i < func_num_args(); $i++) {
        $result *= (float)$numbers[$i];
      }
      break;
    case '%':
      for($i = 2; $i < func_num_args(); $i++) {
        $result %= (float)$numbers[$i];
      }
      break;
    case '**':
      for($i = 2; $i < func_num_args(); $i++) {
        $result **= (float)$numbers[$i];
      }
      break;
    default:
      echo 'Неизвестная арифметическая операция';
      break;
  }
  echo $result . '<br><br>';
}

function task3($num1, $num2) {
  if (is_int($num1) && is_int($num2)) {
    echo('<table>');
    for ($i = 1; $i <= $num1; $i++) {
      echo('<tr>');
      for ($t = 1; $t <= $num2; $t++) {
        echo('<td>');
        echo($i*$t);
        echo('</td>');
      }
      echo('</tr>');
    }
    echo('/<table> <br>');
  } else {
    echo "Введены не целые числа и/или другие символы.";
  }
}

function task4() {
  echo date('d.m.Y H:i') . '<br>';
  echo strtotime('24.02.2016 00:00:00') . '<br><br>';
}

function task5($str1, $str2) {
  echo str_replace('К', '', $str1) . '<br>';
  echo str_replace('Две', 'Три', $str2) . '<br>';
}

function task6($filename) {
  file_put_contents('test.txt', 'Hello again!');
  echo '<br>' . readf($filename) . '<br>';
}

function readf($filename) {
  $fp = fopen($filename, 'r');
  $str = '';
  while (!feof($fp)) {
    $str .= fgets($fp, 1024);
  }
  fclose($fp);
  return $str;
}