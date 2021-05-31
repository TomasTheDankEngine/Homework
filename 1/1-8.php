<?php
$kiekis = rand(5, 3000);
echo 'Vnt. kaina 1 EUR.' . '<br>';
if ($kiekis > 1000 && $kiekis <= 2000) {
    echo "Perkama $kiekis vnt. už " . $kiekis * 0.97 . ' EUR.';
};
if ($kiekis > 2000) {
    echo "Perkama $kiekis vnt. už " . $kiekis * 0.96 . ' EUR.';
};
if ($kiekis <= 1000) {
    echo "Perkama $kiekis vnt. už $kiekis EUR.";
};