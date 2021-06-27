<?php

require __DIR__ . '/Stikline.php';

$s1 = new Stikline(200);
$s2 = new Stikline(150);
$s3 = new Stikline(100);

echo '<br>Stiklineje 1 yra ' . $s1->getKiekis() . ' ml.</br>';
echo '<br>Stiklineje 2 yra ' . $s2->getKiekis() . ' ml.</br>';
echo '<br>Stiklineje 3 yra ' . $s3->getKiekis() . ' ml.</br>';
echo '<br>----------------------------------------------------</br>';

$s1->ipilti(200);

echo '<br>Stiklineje 1 yra ' . $s1->getKiekis() . ' ml.</br>';
echo '<br>Stiklineje 2 yra ' . $s2->getKiekis() . ' ml.</br>';
echo '<br>Stiklineje 3 yra ' . $s3->getKiekis() . ' ml.</br>';
echo '<br>----------------------------------------------------</br>';

$s2->ipilti($s1->ispilti());

echo '<br>Stiklineje 1 yra ' . $s1->getKiekis() . ' ml.</br>';
echo '<br>Stiklineje 2 yra ' . $s2->getKiekis() . ' ml.</br>';
echo '<br>Stiklineje 3 yra ' . $s3->getKiekis() . ' ml.</br>';
echo '<br>----------------------------------------------------</br>';

$s3->ipilti($s2->ispilti());

echo '<br>Stiklineje 1 yra ' . $s1->getKiekis() . ' ml.</br>';
echo '<br>Stiklineje 2 yra ' . $s2->getKiekis() . ' ml.</br>';
echo '<br>Stiklineje 3 yra ' . $s3->getKiekis() . ' ml.</br>';