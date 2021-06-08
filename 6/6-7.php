<h2>*** 6-7:</h2>
<?php
function genarray($count)
{   
    $counter = rand(10, 20);
    foreach (range(1, $counter - 1) as $num) {
        $mas[] = rand(0, 10);
    }
    $mas[] = 0;
    if ($count > 0) {
        $mas[$counter - 1] = genarray(--$count);
    }
    return $mas;
}
$arr = genarray(5);
print_r($arr);