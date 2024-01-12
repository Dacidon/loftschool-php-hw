<?php
$bmw = [
  'model' => 'X5',
  'speed' => 120,
  'doors' => 5,
  'year' => '2015'
];

$toyota = [
  'model' => 'Corolla',
  'speed' => 185,
  'doors' => 5,
  'year' => '2014'
];

$opel = [
  'model' => 'Crossland',
  'speed' => 206,
  'doors' => 5,
  'year' => '2017'
];

$cars = [
  'bmw' => $bmw, 
  'toyota' => $toyota, 
  'opel' => $opel
];


foreach ($cars as $key => $value) {
  echo("CAR $key<br/>");
  foreach ($value as $key1 => $value1) {
    echo("$value1  ");
  }
  echo("<br/><br/>");
}

