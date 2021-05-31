<?php
$hrs = rand(0, 23);
$min = rand(0, 59);
$sec = rand(0, 59);
$extra_sec = rand(0, 300);
echo "Time is $hrs:$min:$sec.";

if ($sec + $extra_sec > 59) {
    $sec = round(($sec + $extra_sec) % 60);
    $min += round(($extra_sec - $sec) / 60);
    if ($min > 59) {
        $hrs += 1;
        $min -= 59;
        if ($hrs > 23) {
            $hrs -= 23;
        }
    }
} else {
    $sec += $extra_sec;
}
echo '<br>' . "Time is $hrs:$min:$sec. Extra seconds: $extra_sec";