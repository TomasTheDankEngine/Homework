<h2>*** 6-9:</h2>
<?php
$masyvas = [];
foreach (range(1, 3) as $_) {
    $masyvas[] = rand(1, 33);
}
print_r($masyvas);
echo '<br><br>';
$masyvas = primecheck($masyvas);
print_r($masyvas);

function primecheck($mas) {
    foreach ($mas as $key => $val) {
        if ($key == count($mas) - 3 | $key == count($mas) - 2 | $key == count($mas) - 1) {
            if (isprime($val) == false) {
                $mas[] = rand(1, 33);
                return primecheck($mas);
            }
        }
    }
    return $mas;
}

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