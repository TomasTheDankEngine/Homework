<h2>*** 6-10:</h2>
<?php
$masyvas = array_fill(0, 10, array_fill(0, 10, ''));
foreach ($masyvas as &$val) {
    foreach ($val as &$num) {
        $num = rand(1, 100);
    }
}
reset($masyvas);
print_r($masyvas);