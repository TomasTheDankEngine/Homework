<?php
$count = 0;
for ($i = 0; $i < 300; $i++) {
    $number = rand(0, 300);
    $color = '#000000';
    if ($number > 275) {
        $color = '#FF0000';
    }
    if ($number > 150) {
        $count++;
    }
    echo "<span style=\"color: $color\">$number </span>";
}
echo "<br>Larger than 150: $count";