<?php

require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';

$krepsys = new Krepsys;

// echo Krepsys::DYDIS;
echo '<pre>';

while ($krepsys->getKiekis() <= Krepsys::DYDIS) {
    $grybas = new Grybas;
    if ($grybas->pickGryb() == true) {
        $krepsys->putGryb($grybas);
        // echo var_dump($grybas) . 'added<br><br>';
    }
    else {
        // echo var_dump($grybas) . 'not added<br><br>';
    }
}

echo $krepsys->getKiekis();
$krepsys->getGrybs();