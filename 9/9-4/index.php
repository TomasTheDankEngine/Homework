<?php

include __DIR__ . '/Kibiras3.php';
include __DIR__ . '/KibirasNePo1.php';

$ki1 = new Kibiras3;
$kn1 = new KibirasNePo1;

$ki1->prideti1Akmeni();
echo $ki1->kiekPririnktaAkmenu() . '<br><br>';

$kn1->prideti1Akmeni();
echo $kn1->kiekPririnktaAkmenu() . '<br><br>';