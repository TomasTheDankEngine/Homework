<h2>*** 5-2:</h2>
<?php
$arr = array_fill(0, 10, array_fill(0, 5, ''));
foreach ($arr as &$element) {
    foreach ($element as &$value) {
        $value = rand(5, 25);
    }
}
reset($arr);
echo 'Array: <br>';
print_r($arr);
?>
<h2>*** 5-2-a:</h2>
<?php
$counter = 0;
foreach ($arr as $value) {
    foreach ($value as $num) {
        if ($num > 10) {
            $counter++;
        }
    }
}
echo "There are $counter element(s) larger than 10 in the array.";
?>
<h2>*** 5-2-b:</h2>
<?php
$largest = 0;
foreach ($arr as $key => $value) {
    foreach ($arr[$key] as $key => $value) {
        if ($value > $largest) {
            $largest = $value;
        }
    }
}
echo "The largest array element is $largest.";
?>
<h2>*** 5-2-c:</h2>
<?php
$sumsarray = array_fill(0, 5, 0);
foreach ($arr as $key => $value) {
    foreach ($arr[$key] as $key => $value) {
        $sumsarray[$key] += $value;
    }
}
print_r($sumsarray);
?>
<h2>*** 5-2-d:</h2>
<?php
foreach ($arr as &$element) {
    array_push($element, rand(5, 25));
    array_push($element, rand(5, 25));
}
reset($arr);
print_r($arr);
?>
<h2>*** 5-2-e:</h2>
<?php
$summedarr = array_fill(0, 10, 0);
$sum = 0;
foreach ($arr as $key => $value) {
    foreach ($arr[$key] as $value) {
        $sum += $value;
    }
    $summedarr[$key] = $sum;
    $sum = 0;
}
print_r($summedarr);