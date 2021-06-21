<?php

require __DIR__ . '/Medis.php';

$medis1 = new Medis;
$medis2 = new Medis;
$medis3 = new Medis;

echo '<pre>';
var_dump($medis1);
echo '<br>';
var_dump($medis2);
echo '<br>';
var_dump($medis3);
echo '<br>';

echo $medis1->color;
$medis1->rustleLeaves();
$medis1->name = 'oak';
$medis1->rustleLeaves();