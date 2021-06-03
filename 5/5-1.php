<h2>*** 5-1:</h2>
<?php
$arr = array_fill(0, 10, array_fill(0, 5, ''));
foreach ($arr as &$element) {
    foreach ($element as &$value) {
        $value = rand(5, 25);
    }
}
reset($arr);
print_r($arr);