<?php
$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);
if ($pirmas > $antras && $pirmas < $trecias) {
    echo $antras, ' ', $pirmas, ' ', $trecias;
}
if ($pirmas > $trecias && $pirmas < $antras) {
    echo $trecias, ' ', $pirmas, ' ', $antras;
}
if ($antras > $trecias && $antras < $pirmas) {
    echo $trecias, ' ', $antras, ' ', $pirmas;
}
if ($antras > $pirmas && $antras < $trecias) {
    echo $pirmas, ' ', $antras, ' ', $trecias;
}
if ($trecias > $pirmas && $trecias < $antras) {
    echo $pirmas, ' ', $trecias, ' ', $antras;
}
if ($trecias > $antras && $trecias < $pirmas) {
    echo $antras, ' ', $trecias, ' ', $pirmas;
}