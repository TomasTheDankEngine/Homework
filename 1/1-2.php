<?php
$pirmas = rand(0, 4);
$antras = rand(0, 4);
if ($pirmas == $antras) {
    echo 1;
};
if ($pirmas > $antras && $antras != 0) {
    if ($antras == 0) {
        echo 'division by zero is impossible!';
    }
    echo round($pirmas / $antras, 2);
}
if ($pirmas < $antras && $pirmas != 0) {
    if ($pirmas == 0) {
        echo 'division by zero is impossible!';
    }
    echo round($antras / $pirmas, 2);
}