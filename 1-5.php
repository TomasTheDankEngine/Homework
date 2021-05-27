<?php
$pirmas = rand(0, 2);
$antras = rand(0, 2);
$trecias = rand(0, 2);
$ketvirtas = rand(0, 2);
$zeroes = 0;
$ones = 0;
$twos = 0;
echo $pirmas . '<br>' . $antras . '<br>' . $trecias . '<br>' . $ketvirtas . '<br>';
if ($pirmas == 0) {
    $zeroes++;
}
if ($antras == 0) {
    $zeroes++;
}
if ($trecias == 0) {
    $zeroes++;
}
if ($ketvirtas == 0) {
    $zeroes++;
}
if ($pirmas == 1) {
    $ones++;
}
if ($antras == 1) {
    $ones++;
}
if ($trecias == 1) {
    $ones++;
}
if ($ketvirtas == 1) {
    $ones++;
}
if ($pirmas == 2) {
    $twos++;
}
if ($antras == 2) {
    $twos++;
}
if ($trecias == 2) {
    $twos++;
}
if ($ketvirtas == 2) {
    $twos++;
}
echo "Zeroes: $zeroes, Ones: $ones, Twos: $twos.";