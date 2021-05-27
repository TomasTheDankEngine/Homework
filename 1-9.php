<?php
$pirmas = rand(0, 100);
$antras = rand(0, 100);
$trecias = rand(0, 100);
$count = 3;
echo "Pirmas: $pirmas <br> Antras: $antras <br> Trečias: $trecias <br>";
echo 'Vidurkis yra ' . round(($pirmas + $antras + $trecias) / 3) . '. <br>';
if ($pirmas < 10 || $pirmas > 90) {
    $pirmas = 0;
    $count--;
};
if ($antras < 10 || $antras > 90) {
    $antras = 0;
    $count--;
};
if ($trecias < 10 || $trecias > 90) {
    $trecias = 0;
    $count--;
};
echo "Pirmas: $pirmas <br> Antras: $antras <br> Trečias: $trecias <br>";
echo 'Antros sąlygos vidurkis yra ' . round(($pirmas + $antras + $trecias) / $count) . '.';