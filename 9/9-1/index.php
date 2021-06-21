<?php
require __DIR__ . './Kibiras1.php';

$kibiras1 = new Kibiras1;
$kibiras1->kiekPririnktaAkmenu();
echo '<br>';
$kibiras1->prideti1Akmeni();
$kibiras1->kiekPririnktaAkmenu();
echo '<br>';
$kibiras1->pridetiDaugAkmenu(8);
$kibiras1->kiekPririnktaAkmenu();