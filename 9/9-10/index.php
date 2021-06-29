<?php

require __DIR__ . '/Tenisininkas.php';

$te1 = new Tenisininkas('Bop');
$te2 = new Tenisininkas('Pob');

Tenisininkas::zaidimoPradzia();
$te1->perduotiKamuoliuka();
$te2->perduotiKamuoliuka();
$te1->perduotiKamuoliuka();
$te2->perduotiKamuoliuka();
$te1->perduotiKamuoliuka();
$te2->perduotiKamuoliuka();

echo '<pre>';

var_dump($te1);
var_dump($te2);