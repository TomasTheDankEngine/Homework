<?php
$kscore = 0;
$pscore = 0;
while ($pscore <= 222 || $kscore <= 222) {
    $kscore += rand(5, 25);
    $pscore += rand(10, 20);
    if ($kscore > $pscore) {
        echo "Partiją laimėjo Kazys (Kazys $kscore:$pscore Petras)<br>";
    }
    if ($kscore < $pscore) {
        echo "Partiją laimėjo Petras (Petras $pscore:$kscore Kazys)<br>";
    }
    if ($kscore == $pscore) {
        echo "Lygiosios ($kscore:$pscore)<br>";
    }
}

$kscore = 0;
$pscore = 0;
echo 'using for <br>';
for ($i = 0; ($kscore <= 222 || $pscore <= 222); $i++) {
    $kscore += rand(5, 25);
    $pscore += rand(10, 20);
    if ($kscore > $pscore) {
        echo "Partiją laimėjo Kazys (Kazys $kscore:$pscore Petras)<br>";
    }
    if ($kscore < $pscore) {
        echo "Partiją laimėjo Petras (Petras $pscore:$kscore Kazys)<br>";
    }
    if ($kscore == $pscore) {
        echo "Lygiosios ($kscore:$pscore)<br>";
    }
}