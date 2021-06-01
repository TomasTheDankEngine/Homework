<?php
$time_start = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    $c = "10 bezdzioniu \n suvalge 20 bananu.";
}
$time_end = microtime(true);
echo 'It took ' . $time_end - $time_start . ' s to perform the first task 1000000 times.<br>';
$time_start = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    $c = '10 bezdzioniu \n suvalge 20 bananu.';
}
$time_end = microtime(true);
echo 'It took ' . $time_end - $time_start . ' s to perform the first task 1000000 times.';