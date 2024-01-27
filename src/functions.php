<?php
// ДЗ 2 Задание 1
// В зависимости от условия - выводятся или все элементы переданного массива по отдельности, либо слитно
function task1($array, $choice = false) {
  if ($choice) {
    return implode($array);
  } else {
    foreach ($array as $value) {
      echo("<p>$value</p>");
    }
  }
}

// ДЗ 2 Задание 2
// В зависимости от выбранного оператора происходит вычисление результата
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

// ДЗ 2 Задание 3
// Вывод таблицы умножения с заданной размерностью
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

// ДЗ 2 Задание 4
// Вывод текущей даты и даты 24.02.2016 00:00:00 по UNIX-времени
function task4() {
  echo date('d.m.Y H:i') . '<br>';
  echo strtotime('24.02.2016 00:00:00') . '<br><br>';
}

// ДЗ 2 Задание 5
// Замена подстрок на другие значения
function task5($str1, $str2) {
  echo str_replace('К', '', $str1) . '<br>';
  echo str_replace('Две', 'Три', $str2) . '<br>';
}

// ДЗ 2 Задание 6
// Запись значения в файл и функция чтения содержимого файла
function task6($filename) {
  file_put_contents('testin.txt', 'Hello again!');
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