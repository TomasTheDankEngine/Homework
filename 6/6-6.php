<h2>*** 6-6:</h2>
<?php
$numbers = [];
foreach (range(1, 100) as $_) {
    $numbers[] = rand(333, 777);
}
print_r($numbers);
echo '<br><br>';
function isprime($num)
{
    $counter = 0;
    $divisor = 2;
    if (gettype($num) != "integer") {
        return 'Only whole numbers can be used!';
    }
    while ($divisor < $num) {
        if ($num % $divisor === 0) {
            $counter++;
        }
        $divisor++;
        if ($divisor == $num && $counter === 0 && $num % 2 != 0) {
            return $num;
        }
    }
}
echo '<br><br>Primes: ';
foreach ($numbers as $num) {
    echo isprime($num) . ' ';
}
