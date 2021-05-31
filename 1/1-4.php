<?php
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "$a, $b, and $c make a valid triangle!";
} else {
    echo "$a, $b, and $c do not make a valid triangle!";
}