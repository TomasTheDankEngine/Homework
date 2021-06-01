<?php
$rand1 = [];
while (count($rand1) <= 50) {
    array_push($rand1, strval(rand(1, 200)));
    array_unique($rand1);
}
$rand1_str = implode(" ", $rand1);

echo "Random string 1: $rand1_str <br>";

$rand2 = sort($rand1);
$rand2_str = '';

for ($i = 0; $i < count($rand1); $i++) {
    if (isPrime($rand1[$i]) == true) {
        $rand2_str .= strval($rand1[$i]) . ' ';
    }
}

echo $rand2_str;

function isPrime ($num) {
    $prime = false;
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i == 0 && $num / $i > 1 && $num != $i) {
            $prime = false;
            break;
        }
        if ($num % $i == 0 && $num / $i == 1 && $num == $i) {
            $prime = true;
        }
    }
    return $prime;
}