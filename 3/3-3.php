<?php
$max = rand(3000, 4000);
echo "Upper limit is: $max <br>";
$nums_str = '';
for ($i = 1; $i <= $max; $i++) {
    if ($max - $i == 77) {
        $nums_str .= strval($i);
        break;
    }
    if ($i % 77 == 0) {
        $nums_str .= strval($i) . ', ';
    }
}
echo $nums_str;