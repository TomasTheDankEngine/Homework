<?php

require __DIR__ . './Miskas.php';
require __DIR__ . './Zveris.php';

$m1 = new Miskas('Labanoras');
$z1 = new Zveris('Meska');

$m1->getName();

$z1->speak();