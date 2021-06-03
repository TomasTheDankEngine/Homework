<h2>*** 5-3:</h2>
<?php
$arr = array_fill(0, 10, []);
foreach ($arr as &$element) {
    $num = rand(2, 20);
    $element = array_fill(0, $num, '');
}
reset($arr);
// print_r($arr);
foreach ($arr as &$element) {
    foreach ($element as &$value) {
        $value = chr(rand(65, 90));
    }
}
reset($arr);
print_r($arr);
echo '<br><br>';
foreach ($arr as &$element) {
    sort($element);
}
reset($arr);
print_r($arr);