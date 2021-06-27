<?php

require __DIR__ . './Kibiras2.php';

$kib1 = new Kibiras2;
$kib2 = new Kibiras2;
$kib3 = new Kibiras2;

$kib1->prideti1Akmeni();
echo $kib1->kiekPririnktaAkmenu() . '<br>';
echo $kib1->kiekPririnktaAkmenuVis() . ' vis <br>';

$kib2->prideti1Akmeni();
echo $kib1->kiekPririnktaAkmenu() . '<br>';
echo $kib1->kiekPririnktaAkmenuVis() . ' vis <br>';

$kib2->prideti1Akmeni();
echo $kib1->kiekPririnktaAkmenu() . '<br>';
echo $kib1->kiekPririnktaAkmenuVis() . ' vis <br>';

$kib3->prideti1Akmeni();
echo $kib1->kiekPririnktaAkmenu() . '<br>';
echo $kib1->kiekPririnktaAkmenuVis() . ' vis <br>';
echo $kib1->kiekPririnktaAkmenuVis() . ' vis <br>';
echo Kibiras2::kiekPririnktaAkmenuVis() . ' vis <br>';